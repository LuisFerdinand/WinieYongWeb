<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use App\Models\Project; // Ensure you have a Project model

class ProjectManagementController extends Controller
{
    public function index(Request $request)
    {
        $perPage = 10;
        $page = $request->input('page', 1);
        $search = $request->input('search');
        $status = $request->input('status');

        $query = Project::query();

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('project_name', 'like', "%$search%")
                    ->orWhere('project_description', 'like', "%$search%")
                    ->orWhere('project_client', 'like', "%$search%")
                    ->orWhere('project_status', 'like', "%$search%")
                    ->orWhere('project_highlights', 'like', "%$search%");
            });
        }

        if ($status) {
            $query->where('project_status', $status);
        }

        $totalProjects = $query->count();
        $projects = $query->skip(($page - 1) * $perPage)->take($perPage)->get();

        $statuses = Project::distinct()->pluck('project_status')->filter()->values();

        return view('dashboard.project-management.index', [
            'projects' => $projects,
            'totalProjects' => $totalProjects,
            'perPage' => $perPage,
            'currentPage' => $page,
            'search' => $search,
            'status' => $status,
            'statuses' => $statuses,
        ]);
    }


    public function create()
    {
        return view('dashboard.project-management.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'project_name' => 'required|string|max:255',
            'project_description' => 'nullable|string',
            'project_date' => 'required|date',
            'project_client' => 'nullable|string|max:255',
            'project_status' => 'nullable|string|max:255',
            'project_highlights' => 'nullable|string|max:255',
            'project_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('project_image')) {
            $file = $request->file('project_image');
            $path = $file->store('projects', 'public'); // Save to public storage
            $validatedData['project_image'] = $path; // Add the path to the validated data array
        }

        // Create the project with the gathered data
        Project::create($validatedData);

        return redirect()->route('project-management.index')->with('success', 'Project created successfully.');
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('dashboard.project-management.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        // Find the project by ID
        $project = Project::findOrFail($id);

        // Validate the request data
        $validatedData = $request->validate([
            'project_name' => 'required|string|max:255',
            'project_description' => 'nullable|string',
            'project_date' => 'required|date',
            'project_client' => 'nullable|string|max:255',
            'project_status' => 'nullable|string|max:255',
            'project_highlights' => 'nullable|string|max:255',
            'project_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('project_image')) {
            // Delete the old image if it exists
            if ($project->project_image && Storage::disk('public')->exists($project->project_image)) {
                Storage::disk('public')->delete($project->project_image);
            }

            // Store the new image
            $file = $request->file('project_image');
            $path = $file->store('projects', 'public'); // Save to public storage
            $validatedData['project_image'] = $path; // Add the path to the validated data array
        }

        // Update the project with the validated data
        $project->update($validatedData);

        return redirect()->route('project-management.index')->with('success', 'Project updated successfully.');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        // Delete the image from storage if it exists
        if ($project->project_image) {
            Storage::disk('public')->delete($project->project_image);
        }

        $project->delete();

        return redirect()->route('project-management.index')->with('success', 'Project deleted successfully.');
    }
}

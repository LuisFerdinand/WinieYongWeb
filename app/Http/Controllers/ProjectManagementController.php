<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use App\Models\Project; // Ensure you have a Project model

use Cviebrock\EloquentSluggable\Services\SlugService;

class ProjectManagementController extends Controller
{
    public function index(Request $request)
    {
        $query = Project::query()
        ->filter(request(['search']))
        ->sort($request->sort);
        $projects = $query->paginate(10)->withQueryString();
        return view('dashboard.projects-management.index', [
            'projects' => $projects,
        ]);
    }


    public function create()
    {
        return view('dashboard.projects-management.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'project_name' => 'required|string|max:255',
            'project_slug' => 'required|string',
            'project_description' => 'required|string',
            'project_highlights' => 'required|string',
            'project_date' => 'required|date|date_format:Y-m-d',
            'project_client' => 'required|string',
            'project_status' => 'required|in:Ongoing,Completed,On Hold,Cancelled,Planned',
            'project_image' => 'image|file|max:1024',
        ]);

        if ($request->file('project_image')) {
            $validatedData['project_image'] = $request->file('project_image')->store('project-images');
        }

        Project::create($validatedData);

        return redirect()->route('projects-management.index')->with('success', 'Project created successfully.');
    }

    public function edit(Project $project)
    {
        return view('dashboard.projects-management.edit', [
            'project'=>$project
        ]);
    }

    public function update(Request $request, Project $project)
    {
        $rules = [
            'project_slug' => 'required|string',
            'project_description' => 'required|string',
            'project_highlights' => 'required|string',
            'project_date' => 'required|date|date_format:Y-m-d',
            'project_client' => 'required|string',
            'project_status' => 'required|in:Ongoing,Completed,On Hold,Cancelled,Planned',
            'project_image' => 'image|file|max:1024',
        ];
        if($request->project_name!=$project->project_name){
            $rules['project_name'] = 'required|max:255';
        }
        $validatedData = $request->validate($rules);
        if ($request->file('project_image')) {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['project_image'] = $request->file('project_image')->store('project-images');
        }

        Project::where('project_id', $project->project_id)->update($validatedData);

        return redirect()->route('projects-management.index')->with('success', 'Project has been updated successfully!');
    }

    public function destroy(Project $project)
    {
        if($project->project_image){
            Storage::delete($project->project_image);
        }
        Project::destroy($project->project_id);
        
        return redirect()->route('projects-management.index')->with('success', 'Project has been deleted successfully!');
    }
    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Project::class, 'project_slug', $request->name);
        return response()->json(['slug'=>$slug]);
    }

}

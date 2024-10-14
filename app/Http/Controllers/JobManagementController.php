<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobManagementController extends Controller
{
    public function index(Request $request)
    {
        $perPage = 10; // Number of items per page
        $page = $request->input('page', 1); // Get the current page, default is 1

        $totalJobs = Job::count(); // Get total number of jobs
        $jobs = Job::skip(($page - 1) * $perPage)->take($perPage)->get(); // Fetch jobs for the current page

        return view('dashboard.job-management.index', [
            'jobs' => $jobs,
            'totalJobs' => $totalJobs,
            'perPage' => $perPage,
            'currentPage' => $page,
        ]);
    }

    public function create()
    {
        return view('dashboard.job-management.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'position' => 'required|string|max:255',
            'work_type' => 'required|in:remote,on-site',
            'total_positions' => 'required|integer|min:1',
            'requirements' => 'required|string',
            'status' => 'required|in:open,closed',
            'application_deadline' => 'nullable|date',
            'image_url' => 'nullable|file|image|max:2048', // Validate image upload
        ]);

        // Handle file upload
        $imagePath = null;
        if ($request->hasFile('image_url')) {
            $file = $request->file('image_url');
            $imagePath = $file->store('images', 'public'); // Save to public storage
        }

        // Create a new job record
        Job::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'position' => $request->input('position'),
            'work_type' => $request->input('work_type'),
            'total_positions' => $request->input('total_positions'),
            'requirements' => $request->input('requirements'),
            'status' => $request->input('status'),
            'application_deadline' => $request->input('application_deadline'),
            'image_url' => $imagePath,
        ]);

        return redirect()->route('job-management.index')->with('success', 'Job created successfully.');
    }

    public function edit($id)
    {
        $job = Job::findOrFail($id);
        return view('dashboard.job-management.edit', compact('job'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'position' => 'required|string|max:255',
            'work_type' => 'required|in:remote,on-site',
            'total_positions' => 'required|integer|min:1',
            'requirements' => 'required|string',
            'status' => 'required|in:open,closed',
            'application_deadline' => 'nullable|date',
            'image_url' => 'nullable|file|image|max:2048', // Validate image upload
        ]);

        $job = Job::findOrFail($id);

        // Handle file upload
        if ($request->hasFile('image_url')) {
            $file = $request->file('image_url');
            $imagePath = $file->store('images', 'public'); // Save to public storage
            $job->image_url = $imagePath;
        }

        // Update the job record
        $job->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'position' => $request->input('position'),
            'work_type' => $request->input('work_type'),
            'total_positions' => $request->input('total_positions'),
            'requirements' => $request->input('requirements'),
            'status' => $request->input('status'),
            'application_deadline' => $request->input('application_deadline'),
            'image_url' => $job->image_url,
        ]);

        return redirect()->route('job-management.index')->with('success', 'Job updated successfully.');
    }

    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();

        return redirect()->route('job-management.index')->with('success', 'Job deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class JobManagementController extends Controller
{
    public function index(Request $request)
    {
        $query = Job::query()
        ->filter(request(['search']))
        ->sort($request->sort);
        $jobs = $query->paginate(10)->withQueryString();
        return view('dashboard.jobs-management.index', [
            'jobs' => $jobs,
            
        ]);
    }

    public function create()
    {
        return view('dashboard.jobs-management.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'job_title' => 'required|string|max:255',
            'job_slug' => 'required|string',
            'job_description' => 'required|string',
            'job_department' => 'required|string|max:255',
            'job_work_type' => 'required|string',
            'job_total_positions' => 'required|integer|min:1',
            'job_requirements' => 'required|string',
            'job_status' => 'required|string',
            'job_image' => 'image|file|max:1024',
        ]);

        if ($request->file('job_image')) {
            $validatedData['job_image'] = $request->file('job_image')->store('job-images');
        }

        Job::create($validatedData);

        return redirect()->route('jobs-management.index')->with('success', 'Job created successfully.');
    }

    public function edit(Job $job)
    {
        return view('dashboard.jobs-management.edit', [
            'job'=>$job
        ]);
    }

    public function update(Request $request, Job $job)
    {
        $rules = [
            'job_slug' => 'required|string',
            'job_description' => 'required|string',
            'job_department' => 'required|string|max:255',
            'job_work_type' => 'required|string',
            'job_total_positions' => 'required|integer|min:1',
            'job_requirements' => 'required|string',
            'job_status' => 'required|string',
            'job_image' => 'image|file|max:1024',
        ];
        if($request->job_title!=$job->job_title){
            $rules['job_title'] = 'required|max:255';
        }
        $validatedData = $request->validate($rules);
        if ($request->file('job_image')) {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['job_image'] = $request->file('job_image')->store('job-images');
        }

        Job::where('job_id', $job->job_id)->update($validatedData);

        return redirect()->route('jobs-management.index')->with('success', 'Job has been updated successfully!');
    }

    public function destroy(Job $job)
    {
        if($job->job_image){
            Storage::delete($job->job_image);
        }
        Job::destroy($job->job_id);
        
        return redirect()->route('jobs-management.index')->with('success', 'Job has been deleted successfully!');
    }
    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Job::class, 'job_slug', $request->name);
        return response()->json(['slug'=>$slug]);
    }
}

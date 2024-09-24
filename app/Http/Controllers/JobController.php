<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\JobApplicationMail;

class JobController extends Controller
{
    // Display the career page with open jobs
    public function index()
    {
        $jobs = Job::where('status', 'open')->get();
        return view('career.index', compact('jobs'));
    }

    // Display a single job detail
    public function show($id)
    {
        $job = Job::findOrFail($id);
        return view('career.show', compact('job'));
    }

    // Handle job application submission
    // Handle job application submission
    public function apply(Request $request, $id)
    {
        // Validate form data
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'school' => 'required|string|max:255',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $job = Job::findOrFail($id);

        // Store the uploaded CV file
        $cvPath = $request->file('cv')->store('cvs', 'public');

        // Prepare email data
        $data = [
            'name' => $request->name,
            'age' => $request->age,
            'school' => $request->school,
            'job_title' => $job->title,
            'cv_path' => $cvPath,
        ];

        try {
            // Send email
            Mail::to('ferdinandluis88@gmail.com')->send(new JobApplicationMail($data));
            return redirect()->back()->with('success', 'Application submitted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to send application. Please try again.');
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Mail\JobApplicationMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

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
    public function apply(Request $request, $id)
    {
        // Validate form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'age' => 'required|integer',
            'school' => 'required|string|max:255',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $job = Job::findOrFail($id);

        // Get the original filename and extension
        $originalName = $request->file('cv')->getClientOriginalName();
        $extension = $request->file('cv')->getClientOriginalExtension();

        // Generate a new filename
        $baseName = pathinfo($originalName, PATHINFO_FILENAME);
        $newFileName = $request->name . '_' . $baseName . '.' . $extension;
        $cvPath = 'cvs/' . $newFileName;

        // Check if the file already exists and create a unique name if it does
        $counter = 1;
        while (Storage::disk('public')->exists($cvPath)) {
            $newFileName = $request->name . '_' . $baseName . '_' . $counter . '.' . $extension;
            $cvPath = 'cvs/' . $newFileName;
            $counter++;
        }

        // Store the uploaded CV file
        $request->file('cv')->storeAs('cvs', $newFileName, 'public');

        // Prepare email data
        $data = [
            'name' => $request->name,
            'email' => $request->email,
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

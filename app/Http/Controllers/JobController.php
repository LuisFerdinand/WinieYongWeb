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
    public function apply(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'school' => 'required|string|max:255',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        // Store the uploaded CV
        $cvPath = $request->file('cv')->store('cvs');

        // Prepare the data for the email
        $data = $request->only('name', 'age', 'school');
        $data['cv_path'] = $cvPath; // Include the path to the CV

        // Send the email to Ferdinand
        Mail::to('ferdinandluis88@gmail.com')->send(new JobApplicationMail($data));

        return redirect()->back()->with('success', 'Your application has been submitted successfully!');
    }
}

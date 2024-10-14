<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        // Fetch all projects
        $projects = Project::all();

        // Pass the projects to the home view
        return view('home', compact('projects'));
    }

    public function show($id)
    {
        // Find the project by ID
        $project = Project::findOrFail($id);

        // Pass the project to the show view
        return view('project-detail', compact('project'));
    }

    public function about()
    {
        return view('about');
    }

    public function products()
    {
        return view('products');
    }

    public function productDetail($type)
    {
        // Logic for product detail pages
        return view('product-detail', ['type' => $type]);
    }

    public function submit(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        return redirect()->route('contact')->with('success', 'Thank you for your message! We will get back to you soon.');
    }

    public function career()
    {
        return view('career');
    }
}

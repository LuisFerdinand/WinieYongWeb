<?php

namespace App\Http\Controllers;

use App\Models\Part;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PartManagementController extends Controller
{
    public function index(Request $request)
    {
        $perPage = 10; // Number of items per page
        $page = $request->input('page', 1); // Get the current page, default is 1

        $totalParts = Part::count(); // Get total number of parts
        $parts = Part::skip(($page - 1) * $perPage)->take($perPage)->get(); // Fetch parts for the current page

        return view('dashboard.part-management.index', [
            'parts' => $parts,
            'totalParts' => $totalParts,
            'perPage' => $perPage,
            'currentPage' => $page,
        ]);
    }

    public function create()
    {
        return view('dashboard.part-management.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'category' => 'nullable|string',
            'contact' => 'required|string',
            'location' => 'required|string',
            'image_url' => 'nullable|file|image|max:2048', // Validate image upload
        ]);

        // Handle file upload
        if ($request->hasFile('image_url')) {
            $file = $request->file('image_url');
            $path = $file->store('images', 'public'); // Save to public storage
            $request->merge(['image_url' => $path]);
        }

        Part::create($request->all());
        return redirect()->route('part-management.index')->with('success', 'Part created successfully.');
    }

    public function edit($id)
    {
        $part = Part::findOrFail($id);
        return view('dashboard.part-management.edit', compact('part'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'category' => 'nullable|string',
            'contact' => 'required|string',
            'location' => 'required|string',
            'image_url' => 'nullable|file|image|max:2048', // Validate image upload
        ]);

        $part = Part::findOrFail($id);

        // Handle file upload
        if ($request->hasFile('image_url')) {
            $file = $request->file('image_url');
            $path = $file->store('images', 'public'); // Save to public storage
            $request->merge(['image_url' => $path]);
        }

        $part->update($request->all());
        return redirect()->route('part-management.index')->with('success', 'Part updated successfully.');
    }

    public function destroy($id)
    {
        $part = Part::findOrFail($id);
        $part->delete();

        return redirect()->route('part-management.index')->with('success', 'Part deleted successfully.');
    }
}

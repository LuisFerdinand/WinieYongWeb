<?php

namespace App\Http\Controllers;

use App\Models\Part;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

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
        $path = null; // Initialize the path variable
        if ($request->hasFile('image_url')) {
            $file = $request->file('image_url');
            $path = $file->store('parts', 'public'); // Save to public storage
        }

        // Create the part, merging the path if it exists
        Part::create(array_merge($request->all(), ['image_url' => $path]));
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
            // Delete the old image if it exists
            if ($part->image_url) {
                Storage::disk('public')->delete($part->image_url);
            }

            // Store the new image
            $file = $request->file('image_url');
            $path = $file->store('parts', 'public'); // Save to public storage
            $part->image_url = $path;
        }

        // Update the part with the other fields
        $part->update($request->except('image_url')); // Exclude image_url from mass assignment
        $part->save();

        return redirect()->route('part-management.index')->with('success', 'Part updated successfully.');
    }


    public function destroy($id)
    {
        $part = Part::findOrFail($id);

        // Check if the image exists and delete it from storage
        if ($part->image_url) {
            Storage::disk('public')->delete($part->image_url);
        }

        // Delete the part record from the database
        $part->delete();

        return redirect()->route('part-management.index')->with('success', 'Part deleted successfully.');
    }
}

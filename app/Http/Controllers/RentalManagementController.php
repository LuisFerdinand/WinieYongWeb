<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class RentalManagementController extends Controller
{
    public function index(Request $request)
    {
        $perPage = 10; // Number of items per page
        $page = $request->input('page', 1); // Get the current page, default is 1

        $totalRentals = Rental::count(); // Get total number of rentals
        $rentals = Rental::skip(($page - 1) * $perPage)->take($perPage)->get(); // Fetch rentals for the current page

        return view('dashboard.rental-management.index', [
            'rentals' => $rentals,
            'totalRentals' => $totalRentals,
            'perPage' => $perPage,
            'currentPage' => $page,
        ]);
    }

    public function create()
    {
        return view('dashboard.rental-management.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'category' => 'required|string|max:255',
            'available_from' => 'nullable|date',
            'available_to' => 'nullable|date',
            'availability_status' => 'required|boolean',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image file
        ]);

        // Handle file upload
        if ($request->hasFile('image_url')) {
            $file = $request->file('image_url');
            $path = $file->store('rentals', 'public'); // Save to public storage in the 'rentals' directory
            $validatedData['image_url'] = $path; // Add the path to the validated data array
        }

        // Create the rental with the gathered data
        Rental::create($validatedData);

        return redirect()->route('rental-management.index')->with('success', 'Rental created successfully.');
    }



    public function edit($id)
    {
        $rental = Rental::findOrFail($id);
        return view('dashboard.rental-management.edit', compact('rental'));
    }

    public function update(Request $request, $id)
    {
        // Find the rental by ID
        $rental = Rental::findOrFail($id);

        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'category' => 'required|string|max:255',
            'available_from' => 'nullable|date',
            'available_to' => 'nullable|date',
            'availability_status' => 'required|boolean',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image file
        ]);

        // Check if a new image is uploaded
        if ($request->hasFile('image_url')) {
            // Delete the old image if it exists
            if ($rental->image_url && Storage::disk('public')->exists($rental->image_url)) {
                Storage::disk('public')->delete($rental->image_url);
            }

            // Store the new image
            $file = $request->file('image_url');
            $path = $file->store('rentals', 'public'); // Save to public storage in the 'rentals' directory
            $validatedData['image_url'] = $path; // Add the path to the validated data array
        }

        // Update the rental with the validated data
        $rental->update($validatedData);

        return redirect()->route('rental-management.index')->with('success', 'Rental updated successfully.');
    }




    public function destroy($id)
    {
        $rental = Rental::findOrFail($id);

        // Delete the image from storage if it exists
        if ($rental->image_url) {
            Storage::disk('public')->delete($rental->image_url);
        }

        $rental->delete();

        return redirect()->route('rental-management.index')->with('success', 'Rental deleted successfully.');
    }
}

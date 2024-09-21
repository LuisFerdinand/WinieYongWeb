<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
            'availability_status' => 'required|boolean',
            'available_from' => 'nullable|date',
            'available_to' => 'nullable|date',
            'image_url' => 'nullable|file|image|max:2048', // Validate image upload
        ]);

        // Handle file upload
        if ($request->hasFile('image_url')) {
            $file = $request->file('image_url');
            $path = $file->store('images', 'public'); // Save to public storage
            $request->merge(['image_url' => $path]);
        }

        Rental::create($request->all());
        return redirect()->route('rental-management.index')->with('success', 'Rental created successfully.');
    }

    public function edit($id)
    {
        $rental = Rental::findOrFail($id);
        return view('dashboard.rental-management.edit', compact('rental'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
            'availability_status' => 'required|boolean',
            'available_from' => 'nullable|date',
            'available_to' => 'nullable|date',
            'image_url' => 'nullable|file|image|max:2048', // Validate image upload
        ]);

        $rental = Rental::findOrFail($id);

        // Handle file upload
        if ($request->hasFile('image_url')) {
            $file = $request->file('image_url');
            $path = $file->store('images', 'public'); // Save to public storage
            $request->merge(['image_url' => $path]);
        }

        $rental->update($request->all());
        return redirect()->route('rental-management.index')->with('success', 'Rental updated successfully.');
    }

    public function destroy($id)
    {
        $rental = Rental::findOrFail($id);
        $rental->delete();

        return redirect()->route('rental-management.index')->with('success', 'Rental deleted successfully.');
    }
}

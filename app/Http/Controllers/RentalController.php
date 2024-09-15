<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    // Display a list of all rentals
    public function index(Request $request)
    {
        $rentals = $this->filterRentals($request);
        return view('services.rental.index', compact('rentals'));
    }

    // Show the details of a specific rental
    public function show($id)
    {
        $rental = Rental::findOrFail($id);
        return view('services.rental.show', compact('rental'));
    }

    // Search rentals based on query
    public function search(Request $request)
    {
        $search = $request->input('search');

        // Retrieve paginated rentals with search query
        $rentals = Rental::when($search, function ($query, $search) {
            return $query->where('name', 'like', "%{$search}%")
                ->orWhere('description', 'like', "%{$search}%");
        })->paginate(10);

        return view('services.rental.index', compact('rentals'))->with('search', $search);
    }

    // Filter rentals based on category and price range
    private function filterRentals(Request $request)
    {
        $query = Rental::query();

        // Filter by category
        if ($request->has('category') && $request->category != '') {
            $query->where('category', $request->category);
        }

        // Filter by price range
        if ($request->has('price_range') && $request->price_range != '') {
            list($minPrice, $maxPrice) = explode('-', $request->price_range);
            $query->whereBetween('price', [(float)$minPrice * 1000000, (float)$maxPrice * 1000000]);
        }

        return $query->paginate(10);
    }
}

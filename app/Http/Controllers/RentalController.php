<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use App\Models\RentalClick; // Ensure you import your RentalClick model
use Illuminate\Http\Request;

class RentalController extends Controller
{
    // Display a list of all rentals with filtering and search capabilities
    public function index(Request $request)
    {
        $query = Rental::query();

        // Search functionality
        if ($request->has('search') && $request->search != '') {
            $query->where('name', 'like', "%{$request->search}%")
                ->orWhere('description', 'like', "%{$request->search}%");
        }

        // Filter by category
        if ($request->has('category') && $request->category != '') {
            $query->where('category', $request->category);
        }

        // Filter by price range
        if ($request->has('price_range') && $request->price_range != '') {
            list($minPrice, $maxPrice) = explode('-', $request->price_range);
            $query->whereBetween('price', [(float)$minPrice, (float)$maxPrice]);
        }

        // Retrieve paginated rentals
        $rentals = $query->paginate(10);

        return view('services.rental.index', compact('rentals'));
    }

    // Show the details of a specific rental
    public function show($id)
    {
        $rental = Rental::findOrFail($id);
        return view('services.rental.show', compact('rental'));
    }

    // Track clicks on rentals
    public function trackClick($id)
    {
        // Find the rental
        $rental = Rental::findOrFail($id);

        // Check if the rental already has a click entry
        $rentalClick = RentalClick::where('rental_id', $id)->first();

        if ($rentalClick) {
            // If exists, increment the click count
            $rentalClick->click_count++;
            $rentalClick->save();
        } else {
            // If not, create a new record
            RentalClick::create([
                'rental_id' => $rental->id,
                'rental_name' => $rental->name,
                'click_count' => 1,
            ]);
        }

        // Redirect user to WhatsApp
        return redirect('https://wa.me/+6285248209388?text=I%20am%20interested%20in%20' . urlencode($rental->name));
    }


    // New method to get click data for the dashboard
    public function getClickData()
    {
        // Fetch click data
        $clickData = RentalClick::select('rental_name', 'clicks_per_day')->get();

        return view('dashboard.index', compact('clickData'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Category;
use App\Models\Brand;
use App\Models\RentalClick; // Ensure you import your RentalClick model
use Illuminate\Http\Request;

class RentalController extends Controller
{
    // Display a list of all rentals with filtering and search capabilities
    public function index(Request $request)
    {
        $query = Type::filter(request(['search', 'brand', 'category']))->with('brand', 'category');
        $title = "";
        if (request('category')) {
            $category = Category::firstWhere('category_slug', request('category'));
            $title = ' in ' . $category->category_name;
        }
        if (request('brand')) {
            $brand = Brand::firstWhere('brand_slug', request('brand'));
            $title = ' by ' . $brand->brand_name;
        }

        $rentals = $query->paginate(6);

        // Retrieve all categories
        $categories = Category::withCount('types')->get(); // Retrieve all categories for filtering
        // Retrieve all brands and count their types
        $brands = Brand::withCount('types')->get(); // Retrieve all brands for filtering

        // Group brands by the first letter
        $groupedBrands = [];
        foreach ($brands as $brand) {
            $firstLetter = strtoupper($brand->brand_name[0]); // Get the first letter and convert it to uppercase
            if (!isset($groupedBrands[$firstLetter])) {
                $groupedBrands[$firstLetter] = []; // Initialize the array for this letter
            }
            $groupedBrands[$firstLetter][] = $brand; // Add the brand to the corresponding letter
        }

        // Sort the grouped brands by the first letter
        ksort($groupedBrands);

        // Group categories by the first letter
        $groupedCategories = [];
        foreach ($categories as $category) {
            $firstLetter = strtoupper($category->category_name[0]); // Get the first letter and convert it to uppercase
            if (!isset($groupedCategories[$firstLetter])) {
                $groupedCategories[$firstLetter] = []; // Initialize the array for this letter
            }
            $groupedCategories[$firstLetter][] = $category; // Add the brand to the corresponding letter
        }

        // Sort the grouped categories by the first letter
        ksort($groupedCategories);
        // dd($query->toSql());


        return view('services.rental.index', [
            "rentals" => $rentals,
            "title" => 'All Rentals' . $title,
            "categories" => $categories,
            "groupedBrands" => $groupedBrands, // Pass grouped brands to the view
            "groupedCategories" => $groupedCategories // Pass grouped brands to the view
        ]);
    }
    // public function index(Request $request)
    // {
    //     $query = Type::with('brand', 'category');
    //     $title = "All Rentals";

    //     // Search functionality
    //     if ($request->has('search') && $request->search != '') {
    //         $searchTerm = $request->search;

    //         $query->where(function ($q) use ($searchTerm) {
    //             $q->where('type_name', 'like', "%{$searchTerm}%")
    //                 ->orWhere('type_description', 'like', "%{$searchTerm}%")
    //                 ->orWhereHas('category', function ($query) use ($searchTerm) {
    //                     $query->where('category_name', 'like', "%{$searchTerm}%");
    //                 })
    //                 ->orWhereHas('brand', function ($query) use ($searchTerm) {
    //                     $query->where('brand_name', 'like', "%{$searchTerm}%");
    //                 });
    //         });
    //     }

    //     // Filter by category
    //     if ($request->has('category') && $request->category != '') {
    //         $query->where('category_id', $request->category); // assuming category_id is the foreign key
    //     }

    //     // Filter by brand
    //     if ($request->has('brand') && $request->brand != '') {
    //         $query->where('brand_id', $request->brand); // assuming brand_id is the foreign key
    //     }

    //     // Filter by price range
    //     if ($request->has('price_range') && $request->price_range != '') {
    //         list($minPrice, $maxPrice) = explode('-', $request->price_range);
    //         $query->whereBetween('price', [(float)$minPrice, (float)$maxPrice]);
    //     }

    //     // Retrieve paginated rentals
    //     $rentals = $query->paginate(10);

    //     // Retrieve all categories
    //     $categories = Category::withCount('types')->get(); // Retrieve all categories for filtering
    //     // Retrieve all brands and count their types
    //     $brands = Brand::withCount('types')->get(); // Retrieve all brands for filtering

    //     // Group brands by the first letter
    //     $groupedBrands = [];
    //     foreach ($brands as $brand) {
    //         $firstLetter = strtoupper($brand->brand_name[0]); // Get the first letter and convert it to uppercase
    //         if (!isset($groupedBrands[$firstLetter])) {
    //             $groupedBrands[$firstLetter] = []; // Initialize the array for this letter
    //         }
    //         $groupedBrands[$firstLetter][] = $brand; // Add the brand to the corresponding letter
    //     }

    //     // Sort the grouped brands by the first letter
    //     ksort($groupedBrands);

    //     // Group categories by the first letter
    //     $groupedCategories = [];
    //     foreach ($categories as $category) {
    //         $firstLetter = strtoupper($category->category_name[0]); // Get the first letter and convert it to uppercase
    //         if (!isset($groupedCategories[$firstLetter])) {
    //             $groupedCategories[$firstLetter] = []; // Initialize the array for this letter
    //         }
    //         $groupedCategories[$firstLetter][] = $category; // Add the brand to the corresponding letter
    //     }

    //     // Sort the grouped categories by the first letter
    //     ksort($groupedCategories);

    //     return view('services.rental.index', [
    //         "rentals" => $rentals,
    //         "title" => $title,
    //         "categories" => $categories,
    //         "groupedBrands" => $groupedBrands, // Pass grouped brands to the view
    //         "groupedCategories" => $groupedCategories // Pass grouped brands to the view
    //     ]);
    // }





    // Show the details of a specific rental
    public function show(Type $type)
    {
        return view('services.rental.show', [
            "title" => $type->type_name,
            "rental" => $type,
        ]);
    }

    // Track clicks on rentals
    public function trackClick($slug)
    {
        // Find the rental by slug
        $rental = Type::where('slug', $slug)->firstOrFail();

        // Check if the rental already has a click entry
        $rentalClick = RentalClick::where('rental_id', $rental->id)->first();

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

        // Redirect user to WhatsApp with rental name
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

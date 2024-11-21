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
        $query = Type::with(['brand', 'category'])
        ->filter(request(['search', 'brand', 'category']))
        ->sort($request->sort);

        $selectedBrands = is_array($request->brand) ? $request->brand : ($request->brand ? [$request->brand] : []);
        $selectedCategories = is_array($request->category) ? $request->category : ($request->category ? [$request->category] : []);

        // Build dynamic title
        $title = $this->buildDynamicTitle($request->search, $selectedBrands, $selectedCategories);


        $rentals = $query->paginate(6)->withQueryString();;

        $categories = Category::withCount('types')->get();
        $brands = Brand::withCount('types')->get(); 

        // Group brands by the first letter
        $groupedBrands = $brands->groupBy(function($brand) {
            return strtoupper(substr($brand->brand_name, 0, 1));
        })->sortKeys();

        $groupedCategories = $categories->groupBy(function($category) {
            return strtoupper(substr($category->category_name, 0, 1));
        })->sortKeys();

        $selectedBrandNames = Brand::whereIn('brand_slug', $selectedBrands)->pluck('brand_name')->toArray();
        $selectedCategoryNames = Category::whereIn('category_slug', $selectedCategories)->pluck('category_name')->toArray();


        return view('services.rental.index', [
            "rentals" => $rentals,
            "title" => $title,
            "groupedBrands" => $groupedBrands, // Pass grouped brands to the view
            "groupedCategories" => $groupedCategories, // Pass grouped brands to the view
            'selectedBrands' => $selectedBrands,
            'selectedCategories' => $selectedCategories,'selectedBrandNames' => $selectedBrandNames,
            'selectedCategoryNames' => $selectedCategoryNames
        ]);
    }
    

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
    private function buildDynamicTitle($search, $selectedBrands, $selectedCategories)
    {
        $titleParts = [];
        
        // Add search term if present
        if ($search) {
            $titleParts[] = "Search results for \"" . strip_tags($search) . "\"";
        }

        // Get brand names
        if (!empty($selectedBrands)) {
            $brandNames = Brand::whereIn('brand_slug', $selectedBrands)
                ->pluck('brand_name')
                ->toArray();
                
            if (count($brandNames) === 1) {
                $titleParts[] = $brandNames[0];
            } elseif (count($brandNames) > 1) {
                $lastBrand = array_pop($brandNames);
                $titleParts[] = implode(', ', $brandNames) . ' and ' . $lastBrand;
            }
        }

        // Get category names
        if (!empty($selectedCategories)) {
            $categoryNames = Category::whereIn('category_slug', $selectedCategories)
                ->pluck('category_name')
                ->toArray();
                
            if (count($categoryNames) === 1) {
                $titleParts[] = $categoryNames[0];
            } elseif (count($categoryNames) > 1) {
                $lastCategory = array_pop($categoryNames);
                $titleParts[] = implode(', ', $categoryNames) . ' and ' . $lastCategory;
            }
        }

        // Build the final title
        if (empty($titleParts)) {
            return 'All Rentals';
        }

        return implode(' | ', $titleParts);
    }
}

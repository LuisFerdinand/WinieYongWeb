<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Product;
use App\Models\ProductClick;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();  // Assuming you want all products to be part of the carousel

        return view('sunward.index', compact('products'));
    }

    // Show single product details
    public function show($slug)
    {
        // Use slug to find the product
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('sunward.show', compact('product'));
    }

    public function trackClick($slug)
    {
        // Find the product using the slug
        $product = Product::where('slug', $slug)->firstOrFail();

        // Check if the product already has a click entry
        $productClick = ProductClick::where('product_id', $product->id)->first();

        if ($productClick) {
            // If exists, increment the click count
            $productClick->click_count++;
            $productClick->save();
        } else {
            // If not, create a new record
            ProductClick::create([
                'product_id' => $product->id,
                'product_name' => $product->name,
                'click_count' => 1,
            ]);
        }

        // Track click per day
        $this->trackClickPerDay($product);

        // Redirect user to WhatsApp
        return redirect('https://wa.me/+6285248209388?text=I%20am%20interested%20in%20' . urlencode($product->name));
    }

    // New method to track clicks per day
    public function trackClickPerDay($product)
    {
        $today = Carbon::today()->toDateString(); // Get today's date
        $productClick = ProductClick::where('product_id', $product->id)->first();

        if ($productClick) {
            // Decode the clicks_per_day JSON to update it
            $clicksPerDay = json_decode($productClick->clicks_per_day, true) ?? [];

            // Increment the count for today or initialize if it's the first click for today
            if (isset($clicksPerDay[$today])) {
                $clicksPerDay[$today] += 1;
            } else {
                $clicksPerDay[$today] = 1;
            }

            // Update the click count in the database
            $productClick->clicks_per_day = json_encode($clicksPerDay);
            $productClick->save();
        }
    }

    // New method to get click data for the dashboard
    public function getClickData()
    {
        // Fetch click data
        $clickData = ProductClick::select('product_name', 'clicks_per_day')->get();

        return view('dashboard.index', compact('clickData'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\ProductClick;
use App\Models\RentalClick; // Ensure to import the RentalClick model
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch all product clicks data (including historical data)
        $productClicks = ProductClick::all();

        // Fetch total product clicks aggregated by product name
        $totalProductClicks = ProductClick::groupBy('product_name')
            ->selectRaw('product_name, SUM(click_count) as total_clicks')
            ->get()
            ->map(function ($click) {
                return [
                    'product_name' => $click->product_name,
                    'total_clicks' => $click->total_clicks
                ];
            });

        // Fetch rental click data
        $rentalClicks = RentalClick::all();

        // Fetch total rental clicks aggregated by rental name
        $totalRentalClicks = RentalClick::groupBy('rental_name')
            ->selectRaw('rental_name, SUM(click_count) as total_clicks')
            ->get()
            ->map(function ($click) {
                return [
                    'rental_name' => $click->rental_name,
                    'total_clicks' => $click->total_clicks
                ];
            });

        return view('dashboard.index', [
            'productClicks' => $productClicks,
            'totalProductClicks' => $totalProductClicks,
            'rentalClicks' => $rentalClicks,
            'totalRentalClicks' => $totalRentalClicks
        ]);
    }
}

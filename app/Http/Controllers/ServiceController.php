<?php

namespace App\Http\Controllers;

class ServiceController extends Controller
{
    // Method to navigate to rental page
    public function rental()
    {
        return view('services.rental');
    }

    // Method to navigate to repair page
    public function repair()
    {
        return view('services.repair.index');
    }

    // Method to navigate to parts page
    public function parts()
    {
        return view('services.parts');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function products()
    {
        return view('products');
    }

    public function services()
    {
        return view('services');
    }

    public function productDetail($type)
    {
        // Logic for product detail pages
        return view('product-detail', ['type' => $type]);
    }

    public function serviceDetail($type)
    {
        // Logic for service detail pages
        return view('service-detail', ['type' => $type]);
    }
}

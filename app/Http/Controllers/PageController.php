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

    public function productDetail($type)
    {
        // Logic for product detail pages
        return view('product-detail', ['type' => $type]);
    }

    public function submit(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        return redirect()->route('contact')->with('success', 'Thank you for your message! We will get back to you soon.');
    }
}

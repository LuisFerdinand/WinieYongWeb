<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductManagementController extends Controller
{
    public function index(Request $request)
    {
        $perPage = 10; // Number of items per page
        $page = $request->input('page', 1); // Get the current page, default is 1

        $totalProducts = Product::count(); // Get total number of products
        $products = Product::skip(($page - 1) * $perPage)->take($perPage)->get(); // Fetch products for the current page

        return view('dashboard.product-management.index', [
            'products' => $products,
            'totalProducts' => $totalProducts,
            'perPage' => $perPage,
            'currentPage' => $page,
        ]);
    }

    public function create()
    {
        return view('dashboard.product-management.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category' => 'nullable|string',
            'model_number' => 'nullable|string',
            'specifications' => 'nullable|string',
            'image_url' => 'nullable|file|image|max:2048', // Validate image upload
        ]);

        // Handle file upload
        if ($request->hasFile('image_url')) {
            $file = $request->file('image_url');
            $path = $file->store('images', 'public'); // Save to public storage
            $request->merge(['image_url' => $path]);
        }

        Product::create($request->all());
        return redirect()->route('product-management.index')->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('dashboard.product-management.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category' => 'nullable|string',
            'model_number' => 'nullable|string',
            'specifications' => 'nullable|string',
            'image_url' => 'nullable|file|image|max:2048', // Validate image upload
        ]);

        $product = Product::findOrFail($id);

        // Handle file upload
        if ($request->hasFile('image_url')) {
            $file = $request->file('image_url');
            $path = $file->store('images', 'public'); // Save to public storage
            $request->merge(['image_url' => $path]);
        }

        $product->update($request->all());
        return redirect()->route('product-management.index')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('product-management.index')->with('success', 'Product deleted successfully.');
    }
}

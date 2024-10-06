<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductManagementController extends Controller
{
    public function index(Request $request)
    {
        $perPage = 10;
        $page = $request->input('page', 1);
        $search = $request->input('search');

        // Fetch products based on search query
        $query = Product::query();

        if ($search) {
            $query->where('name', 'like', "%{$search}%")
                ->orWhere('description', 'like', "%{$search}%")
                ->orWhere('category', 'like', "%{$search}%")
                ->orWhere('model_number', 'like', "%{$search}%")
                ->orWhere('specifications', 'like', "%{$search}%");
        }

        $totalProducts = $query->count(); // Get total number of products based on search
        $products = $query->skip(($page - 1) * $perPage)->take($perPage)->get(); // Fetch products for the current page

        return view('dashboard.product-management.index', [
            'products' => $products,
            'totalProducts' => $totalProducts,
            'perPage' => $perPage,
            'currentPage' => $page,
            'search' => $search, // Pass search input to the view
        ]);
    }


    public function create()
    {
        return view('dashboard.product-management.create');
    }

    public function store(Request $request)
    {
        // Validate incoming request data
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

        // Initialize the data array for the product
        $data = $request->only(['name', 'description', 'price', 'stock', 'category', 'model_number', 'specifications']);

        // Handle file upload
        if ($request->hasFile('image_url')) {
            $file = $request->file('image_url');
            $path = $file->store('sunwards', 'public'); // Save to public storage
            $data['image_url'] = $path; // Add the path to the data array
        }

        // Create the product with the gathered data
        Product::create($data);

        return redirect()->route('product-management.index')->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('dashboard.product-management.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        // Validate incoming request data
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

        // Find the product by ID
        $product = Product::findOrFail($id);

        // Initialize the data array for the product
        $data = $request->only(['name', 'description', 'price', 'stock', 'category', 'model_number', 'specifications']);

        // Handle file upload
        if ($request->hasFile('image_url')) {
            // Delete the old image if it exists
            if ($product->image_url && Storage::disk('public')->exists($product->image_url)) {
                Storage::disk('public')->delete($product->image_url);
            }

            // Store the new image
            $file = $request->file('image_url');
            $path = $file->store('sunwards', 'public'); // Save to public storage
            $data['image_url'] = $path; // Add the path to the data array
        }

        // Update the product with the gathered data
        $product->update($data);

        return redirect()->route('product-management.index')->with('success', 'Product updated successfully.');
    }


    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Check if the image exists and delete it from storage
        if ($product->image_url) {
            Storage::disk('public')->delete($product->image_url);
        }

        // Delete the product record from the database
        $product->delete();

        return redirect()->route('part-management.index')->with('success', 'Part deleted successfully.');
    }
}

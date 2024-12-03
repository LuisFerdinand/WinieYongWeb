<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str; // Import Str facade for slug generation

use Cviebrock\EloquentSluggable\Services\SlugService;

class ProductManagementController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query()
        ->filter(request(['search']))
        ->sort($request->sort);
        $products = $query->paginate(10)->withQueryString();
        return view('dashboard.products-management.index', [
            'products' => $products,
        ]);
    }


    public function create()
    {
        return view('dashboard.products-management.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_name' => 'required|string|max:255',
            'product_slug' => 'required|string',
            'product_description' => 'required|string',
            'product_model_number' => 'required|string|max:255',
            'product_price' => 'required|integer|min:1',
            'product_power_output' => 'required|numeric|min:0.1',
            'product_dimensions' => 'required|string',
            'product_fuel_type' => 'required|string',
            'product_usage_instructions' => 'required|string',
            'product_image' => 'image|file|max:1024',
        ]);

        if ($request->file('product_image')) {
            $validatedData['product_image'] = $request->file('product_image')->store('product-images');
        }

        Product::create($validatedData);

        return redirect()->route('products-management.index')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        return view('dashboard.products-management.edit', [
            'product'=>$product
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $rules = [
            'product_slug' => 'required|string',
            'product_description' => 'required|string',
            'product_model_number' => 'required|string|max:255',
            'product_price' => 'required|integer|min:1',
            'product_power_output' => 'required|numeric|min:0.1',
            'product_dimensions' => 'required|string',
            'product_fuel_type' => 'required|string',
            'product_usage_instructions' => 'required|string',
            'product_image' => 'image|file|max:1024',
        ];
        if($request->product_name!=$product->product_name){
            $rules['product_name'] = 'required|max:255';
        }
        $validatedData = $request->validate($rules);
        if ($request->file('product_image')) {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['product_image'] = $request->file('product_image')->store('product-images');
        }

        Product::where('product_id', $product->product_id)->update($validatedData);

        return redirect()->route('products-management.index')->with('success', 'Product has been updated successfully!');
    }

    public function destroy(Product $product)
    {
        if($product->product_image){
            Storage::delete($product->product_image);
        }
        Product::destroy($product->product_id);
        
        return redirect()->route('products-management.index')->with('success', 'Product has been deleted successfully!');
    }
    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Product::class, 'product_slug', $request->name);
        return response()->json(['slug'=>$slug]);
    }
}

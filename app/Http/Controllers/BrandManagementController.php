<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;
class BrandManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = 10;
        $page = $request->input('page', 1);
        $search = $request->input('search');
        $query = Brand::query()->withCount('types');

        if ($search) {
            $query->where('brand_name', 'like', "%{$search}%")
                ->orWhere('brand_description', 'like', "%{$search}%");
        }

        $query->orderBy('brand_name', 'asc');
        $totalBrands = $query->count();

        $brands = $query->skip(($page - 1) * $perPage)->take($perPage)->get();

        return view('dashboard.machinery-rentals.brands-management.index', [
            'brands' => $brands,
            'totalBrands' => $totalBrands,
            'perPage' => $perPage,
            'currentPage' => $page,
            'search' => $search, 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.machinery-rentals.brands-management.create', [
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'brand_name' => 'required|max:255|unique:brands',
            'brand_slug' => 'required',
            'brand_image' => 'image|file|max:1024',
            'brand_description' => 'required|string',
        ]);

        if ($request->file('brand_image')) {
            $validatedData['brand_image'] = $request->file('brand_image')->store('brand-images');
        }

        // Create the rental with the gathered data
        Brand::create($validatedData);

        return redirect()->route('brands-management.index')->with('success', 'Brand created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return view('dashboard.machinery-rentals.brands-management.edit', [
            'rental'=>$brand
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        $rules = [
            'brand_slug' => 'required',
            'brand_image' => 'image|file|max:1024',
            'brand_description' => 'required|string',
        ];
        if($request->brand_name!=$brand->brand_name){
            $rules['brand_name'] = 'required|max:255|unique:brands';
        }
        $validatedData = $request->validate($rules);
        if ($request->file('brand_image')) {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['brand_image'] = $request->file('brand_image')->store('post-images');
        }

        Brand::where('brand_id', $brand->brand_id)->update($validatedData);

        return redirect()->route('brands-management.index')->with('success', 'Brand has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        if($brand->brand_image){
            Storage::delete($brand->brand_image);
        }
        Brand::destroy($brand->brand_id);
        
    return redirect()->route('brands-management.index')->with('success', 'Brand has been deleted successfully!');
    }
    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Brand::class, 'brand_slug', $request->name);
        return response()->json(['slug'=>$slug]);
    }
}

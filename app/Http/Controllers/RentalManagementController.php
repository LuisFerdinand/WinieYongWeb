<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Rental;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class RentalManagementController extends Controller
{
    public function index(Request $request)
    {
        $perPage = 10;
        $page = $request->input('page', 1);
        $search = $request->input('search');
        $query = Type::query()->with('brand', 'category');

        if ($search) {
            $query->where('type_name', 'like', "%{$search}%")
                ->orWhere('type_description', 'like', "%{$search}%")
                ->orWhereHas('category', function ($query) use ($search) {
                    $query->where('category_name', 'like', "%{$search}%");
                })
                ->orWhereHas('brand', function ($query) use ($search) {
                    $query->where('brand_name', 'like', "%{$search}%");
                });
        }

        $query->orderBy('type_name', 'asc');
        $totalRentals = $query->count();

        $rentals = $query->skip(($page - 1) * $perPage)->take($perPage)->get();

        return view('dashboard.machinery-rentals.rentals-management.index', [
            'rentals' => $rentals,
            'totalRentals' => $totalRentals,
            'perPage' => $perPage,
            'currentPage' => $page,
            'search' => $search, 
        ]);
    }

    public function create()
    {
        return view('dashboard.machinery-rentals.rentals-management.create', [
            'categories' => Category::orderBy('category_name', 'asc')->get(),
            'brands' => Brand::orderBy('brand_name', 'asc')->get(),
        ]);
        
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'type_name' => 'required|max:255|unique:types',
            'type_slug' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',
            'type_length' => 'required|numeric',
            'type_width' => 'required|numeric',
            'type_height' => 'required|numeric',
            'type_availability' => 'required',
            'type_image' => 'image|file|max:1024',
            'type_operating_weight' => 'required|numeric',
            'type_engine_power' => 'required|numeric',
            'type_fuel_capacity' => 'required|numeric',
            'type_max_speed' => 'required|numeric',
            'type_description' => 'required|string',
        ]);

        if ($request->file('type_image')) {
            $validatedData['type_image'] = $request->file('type_image')->store('post-images');
        }

        // Create the rental with the gathered data
        Type::create($validatedData);

        return redirect()->route('rentals-management.index')->with('success', 'Rental created successfully.');
    }

    public function edit(Type $type)
    {
        return view('dashboard.machinery-rentals.rentals-management.edit', [
            'rental'=>$type,
            'categories' => Category::orderBy('category_name', 'asc')->get(),
            'brands' => Brand::orderBy('brand_name', 'asc')->get(),
        ]);
    }

    public function update(Request $request, Type $type)
    {
        $rules = [
            'type_slug' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',
            'type_length' => 'required|numeric',
            'type_width' => 'required|numeric',
            'type_height' => 'required|numeric',
            'type_availability' => 'required',
            'type_image' => 'image|file|max:1024',
            'type_operating_weight' => 'required|numeric',
            'type_engine_power' => 'required|numeric',
            'type_fuel_capacity' => 'required|numeric',
            'type_max_speed' => 'required|numeric',
            'type_description' => 'required|string',
        ];
        if($request->type_name!=$type->type_name){
            $rules['type_name'] = 'required|max:255|unique:types';
        }
        $validatedData = $request->validate($rules);
        if ($request->file('type_image')) {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['type_image'] = $request->file('type_image')->store('post-images');
        }

        Type::where('type_id', $type->type_id)->update($validatedData);

        return redirect()->route('rentals-management.index')->with('success', 'Rental has been updated successfully!');
    }

    public function destroy(Type $type)
    {
        if($type->type_image){
            Storage::delete($type->type_image);
        }
        Type::destroy($type->type_id);
        
        return redirect()->route('rentals-management.index')->with('success', 'Rental has been deleted successfully!');
    }
    
    public function show(Type $type)
    {
        return view('dashboard.machinery-rentals.rentals-management.show', [
            'title' => 'Show',
            'rental' => $type
        ]);
    }
    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Type::class, 'type_slug', $request->name);
        return response()->json(['slug'=>$slug]);
    }



}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class CategoryManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = 10;
        $page = $request->input('page', 1);
        $search = $request->input('search');
        $query = Category::query()->withCount('types');

        if ($search) {
            $query->where('category_name', 'like', "%{$search}%")
                ->orWhere('category_description', 'like', "%{$search}%");
        }

        $query->orderBy('category_name', 'asc');
        $totalCategories = $query->count();

        $categories = $query->skip(($page - 1) * $perPage)->take($perPage)->get();

        return view('dashboard.machinery-rentals.categories-management.index', [
            'categories' => $categories,
            'totalCategories' => $totalCategories,
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
        return view('dashboard.machinery-rentals.categories-management.create', [
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_name' => 'required|max:255|unique:categories',
            'category_slug' => 'required',
            'category_image' => 'image|file|max:1024',
            'category_description' => 'required|string',
        ]);

        if ($request->file('category_image')) {
            $validatedData['category_image'] = $request->file('category_image')->store('category-images');
        }

        // Create the rental with the gathered data
        Category::create($validatedData);

        return redirect()->route('categories-management.index')->with('success', 'Category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('dashboard.machinery-rentals.categories-management.edit', [
            'rental'=>$category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $rules = [
            'category_slug' => 'required',
            'category_image' => 'image|file|max:1024',
            'category_description' => 'required|string',
        ];
        if($request->category_name!=$category->category_name){
            $rules['category_name'] = 'required|max:255|unique:categories';
        }
        $validatedData = $request->validate($rules);
        if ($request->file('category_image')) {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['category_image'] = $request->file('category_image')->store('post-images');
        }

        Category::where('category_id', $category->category_id)->update($validatedData);

        return redirect()->route('categories-management.index')->with('success', 'Category has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if($category->category_image){
            Storage::delete($category->category_image);
        }
        Category::destroy($category->category_id);
        
        return redirect()->route('categories-management.index')->with('success', 'Category has been deleted successfully!');
    }
    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Category::class, 'category_slug', $request->name);
        return response()->json(['slug'=>$slug]);
    }
}

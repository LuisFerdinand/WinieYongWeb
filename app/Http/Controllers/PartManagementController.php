<?php

namespace App\Http\Controllers;

use App\Models\Part;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

use Cviebrock\EloquentSluggable\Services\SlugService;

class PartManagementController extends Controller
{
    public function index(Request $request)
    {
        $query = Part::query()
        ->filter(request(['search']))
        ->sort($request->sort);
        $parts = $query->paginate(10)->withQueryString();
        return view('dashboard.parts-management.index', [
            'parts' => $parts,
            
        ]);
    }

    public function create()
    {
        return view('dashboard.parts-management.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'part_name' => 'required|string|max:255',
            'part_slug' => 'required|string',
            'part_description' => 'required|string',
            'part_category' => 'required|string|max:255',
            'part_contact' => 'required|string',
            'part_price' => 'required|integer|min:1',
            'part_location' => 'required|string',
            'part_image' => 'image|file|max:1024',
        ]);

        if ($request->file('part_image')) {
            $validatedData['part_image'] = $request->file('part_image')->store('part-images');
        }

        Part::create($validatedData);

        return redirect()->route('parts-management.index')->with('success', 'Part created successfully.');
    }

    public function edit(Part $part)
    {
        return view('dashboard.parts-management.edit', [
            'part'=>$part
        ]);
    }

    public function update(Request $request, Part $part)
    {
        $rules = [
            'part_slug' => 'required|string',
            'part_description' => 'required|string',
            'part_category' => 'required|string|max:255',
            'part_contact' => 'required|string',
            'part_price' => 'required|integer|min:1',
            'part_location' => 'required|string',
            'part_image' => 'image|file|max:1024',
        ];
        if($request->part_name!=$part->part_name){
            $rules['part_name'] = 'required|max:255';
        }
        $validatedData = $request->validate($rules);
        if ($request->file('part_image')) {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['part_image'] = $request->file('part_image')->store('part-images');
        }

        Part::where('part_id', $part->part_id)->update($validatedData);

        return redirect()->route('parts-management.index')->with('success', 'Part has been updated successfully!');
    }


    public function destroy(Part $part)
    {
        if($part->part_image){
            Storage::delete($part->part_image);
        }
        Part::destroy($part->part_id);
        
        return redirect()->route('parts-management.index')->with('success', 'Part has been deleted successfully!');
    }
    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Part::class, 'part_slug', $request->name);
        return response()->json(['slug'=>$slug]);
    }
}

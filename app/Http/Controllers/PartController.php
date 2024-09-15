<?php

namespace App\Http\Controllers;

use App\Models\Part;
use Illuminate\Http\Request;

class PartController extends Controller
{
    public function index(Request $request)
    {
        $query = Part::query();

        if ($request->has('search') && $request->search != '') {
            $query->where('name', 'like', "%{$request->search}%")
                ->orWhere('description', 'like', "%{$request->search}%");
        }

        if ($request->has('category') && $request->category != '') {
            $query->where('category', $request->category);
        }

        if ($request->has('price_range') && $request->price_range != '') {
            list($minPrice, $maxPrice) = explode('-', $request->price_range);
            $query->whereBetween('price', [(float)$minPrice, (float)$maxPrice]);
        }

        $parts = $query->paginate(10);

        return view('services.parts.index', compact('parts'));
    }

    public function show($id)
    {
        $part = Part::findOrFail($id);
        return view('services.parts.show', compact('part'));
    }
}

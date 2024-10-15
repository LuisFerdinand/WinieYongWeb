<?php

namespace App\Http\Controllers;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index(Request $request){
        return view('2/posts', [
            "title"=>"All Types",
            "types"=>Type::all()
        ]);
    }
    public function show(Type $type){
        return view('2/post', [
            "title"=>$type->type_name,
            "type"=>$type,
        ]);
    }
}

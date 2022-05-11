<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Recipes;

class RecipeController extends Controller
{
    
    public function index()
    {
        return Recipes::all();
    }

    public function show($recipe_id)
    {
        return Recipes::where('recipe_id', '=' ,$recipe_id)->firstOrFail();
    }

    public function create(Request $request)
    {
            return Recipes::create([
                'name'=>$request->name,
                'type'=>'Main',
            ]);
    }

}

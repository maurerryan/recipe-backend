<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Ingredients;

class IngredientsController extends Controller
{
    
    public function index()
    {
        return Ingredients::all();
    }

    // public function show($recipe_id)
    // {
    //     return Recipes::where('recipe_id', '=' ,$recipe_id)->firstOrFail();
    // }

    public function create(Request $request)
    {
            return Ingredients::create([
                'order'=>$request->order,
                'ingredient'=>$request->ingredient,
                'denomination'=>$request->denomination,
                'measurement'=>$request->measurement,
                'food_category'=>'',
                'recipe_id'=>$request->id,
            ]);
    }

}

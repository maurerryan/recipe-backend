<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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

        $data = $request->only('name', 'description', 'preptime', 'cooktime', 'servings', 'userId');
        $validator = Validator::make($data, 
            [
                'name' => 'required|unique:recipes',
                'description' => 'required',
                'preptime' => 'required',
                'cooktime' => 'required',
                'servings' => 'required',
                'userId' => 'required|integer|numeric'
            ],[
                'userId.required' => 'Invalid User ID, is required',
                'userId.integer' => 'Invalid User ID, not an integer',
                'userId.numeric' => 'Invalid User ID, not numeric',
                'required' => 'Please enter a valid :attribute',
                'unique' => 'This :attribute is already in use. Please choose another.'
            ]

        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()], 422);
        }

        return Recipes::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'preptime'=>$request->preptime,
            'cooktime'=>$request->cooktime,
            'servings'=>$request->servings,
            'user_id'=>$request->userId,
            'type'=>'Main',
        ]);

    }

}

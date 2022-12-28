<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RecipeController;
use App\Http\Controllers\IngredientsController;
use App\Models\Recipes;
use App\Models\User;
use App\Models\Ingredients;
use App\Models\Instructions;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



//Route::get('/recipes', [RecipeController::class, 'index']);
//Route::get('/recipes', 'RecipeController@index');

// works (dont delete)
// Route::get('/recipes', function() {
//     return Recipes::with('user:id,first_name,last_name,username,avatar')->latest()->get();
// });

// works for recipe & ingredients
// Route::get('/recipes', function() {
//     // return Recipes::with('ingredients')->latest()->get();
//     //return Recipes::with('instructions')->latest()->get();
//     return Recipes::with('ingredients','instructions')->latest()->get();
// });

// Route::get('/recipes', 'RecipeController@index');

Route::resource('recipes', RecipeController::class);
Route::post('/recipes', [RecipeController::class, 'create']);

Route::post('/ingredients', [IngredientsController::class, 'create']);

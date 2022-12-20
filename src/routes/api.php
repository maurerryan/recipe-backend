<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RecipeController;
use App\Http\Controllers\IngredientsController;
use App\Models\Recipes;

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

// Route::get('/recipes', function() {
//     return Recipes::all();
// });

//Route::get('/recipes', [RecipeController::class, 'index']);
Route::get('/recipes', 'RecipeController@index');

Route::resource('recipes', RecipeController::class);


// Route::post('/recipes', function(Request $request){
//     return Recipes::create([
//         'name'=>$request->name,
//         'type'=>'Main',
//     ]);
// });

//Route::post('/recipes', 'RecipeController@create');
Route::post('/recipes', [RecipeController::class, 'create']);

Route::post('/ingredients', [IngredientsController::class, 'create']);

// Route::namespace('Api')->group(function () {
//     Route::apiResource('recipes', 'RecipeController');
// });
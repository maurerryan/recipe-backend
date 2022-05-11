<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use App\Models\Recipes;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function show()
    {
        echo 'hello';
        //return view('hello');

        //$user = Recipes::get()->count();
        
        //$count = DB::table('Recipes')->count();

        //echo $count;

        //echo $user;

        // if($user){
        //     echo "User exists";
        // }
        //dd($user);
    }
}

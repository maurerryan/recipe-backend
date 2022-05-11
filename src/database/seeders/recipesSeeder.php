<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class recipesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')->insert([
            'name' => 'Creamy Tuna Mushroom Pasta',
            'description' => 'This creamy tuna mushroom pasta recipe is tossed with the coziest lemon garlic cream sauce and easy to make in just 30 minutes. Feel free to double the batch if you would like to use a full pound of pasta.',
            'preptime' => '15 Minutes',
            'cooktime' => '15 Minutes',
            'servings' => '4',
            'calories_per_serving' => '360',
            'personal_notes' => '',
            'type' => 'Main',
        ]);
        DB::table('recipes')->insert([
            'name' => 'Salmon with Burst Tomato Sauce',
            'description' => 'This Salmon in Burst Tomato Sauce recipe is ultra-easy to make in 30 minutes and simmered in a garlicky tomato basil cream sauce. Serve with crusty bread, pasta, rice, or whatever sounds good!',
            'preptime' => '30 Minutes',
            'cooktime' => '25 Minutes',
            'servings' => '4',
            'calories_per_serving' => '420',
            'personal_notes' => '',
            'type' => 'Main',
        ]);
        DB::table('recipes')->insert([
            'name' => 'Lemon, Garlic & Thyme Drumsticks',
            'description' => 'You will love this delicious Lemon, Garlic & Thyme Drumsticks Recipe!',
            'preptime' => '10 Minutes',
            'cooktime' => '60 Minutes',
            'servings' => '4',
            'calories_per_serving' => '510',
            'personal_notes' => '',
            'type' => 'Main',
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;


class ingredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients')->insert([
            'order' => 1,
            'ingredient' => 'uncooked pasta',
            'denomination' => '8',
            'measurement' => 'oz',
            'food_category' => 'grains/pasta',
            'recipe_id' => 1,
            'created_at' => now(),
        ]);
        DB::table('ingredients')->insert([
            'order' => 2,
            'ingredient' => 'butter',
            'denomination' => '2',
            'measurement' => 'tbsp',
            'food_category' => 'dairy',
            'recipe_id' => 1,
            'created_at' => now(),
        ]);
        DB::table('ingredients')->insert([
            'order' => 3,
            'ingredient' => 'sliced baby bella mushrooms',
            'denomination' => '16',
            'measurement' => 'oz',
            'food_category' => 'produce',
            'recipe_id' => 1,
            'created_at' => now(),
        ]);
        DB::table('ingredients')->insert([
            'order' => 4,
            'ingredient' => 'garlic, pressed or minced',
            'denomination' => '5',
            'measurement' => 'cloves',
            'food_category' => 'produce',
            'recipe_id' => 1,
            'created_at' => now(),
        ]);
        DB::table('ingredients')->insert([
            'order' => 4,
            'ingredient' => 'finely-chopped fresh rosemary',
            'denomination' => '1',
            'measurement' => 'tbsp',
            'food_category' => 'produce',
            'recipe_id' => 1,
            'created_at' => now(),
        ]);
        DB::table('ingredients')->insert([
            'order' => 1,
            'ingredient' => 'salmon fillets',
            'denomination' => '4',
            'measurement' => '',
            'food_category' => 'meat',
            'recipe_id' => 2,
            'created_at' => now(),
        ]);
        DB::table('ingredients')->insert([
            'order' => 2,
            'ingredient' => 'sea salt',
            'denomination' => '1',
            'measurement' => 'pinch',
            'food_category' => 'seasoning',
            'recipe_id' => 2,
            'created_at' => now(),
        ]);
        DB::table('ingredients')->insert([
            'order' => 3,
            'ingredient' => 'olive oil',
            'denomination' => '1/3',
            'measurement' => 'cup',
            'food_category' => 'oil',
            'recipe_id' => 2,
            'created_at' => now(),
        ]);
        DB::table('ingredients')->insert([
            'order' => 4,
            'ingredient' => 'cherry tomatoes',
            'denomination' => '2',
            'measurement' => 'lbs',
            'food_category' => 'produce',
            'recipe_id' => 2,
            'created_at' => now(),
        ]);
        DB::table('ingredients')->insert([
            'order' => 1,
            'ingredient' => 'chicken drumsticks (about 1.5 lbs.), rinsed',
            'denomination' => '6',
            'measurement' => '',
            'food_category' => 'meat',
            'recipe_id' => 3,
            'created_at' => now(),
        ]);
        DB::table('ingredients')->insert([
            'order' => 2,
            'ingredient' => 'olive oil',
            'denomination' => '3',
            'measurement' => 'tbsp',
            'food_category' => 'oil',
            'recipe_id' => 3,
            'created_at' => now(),
        ]);
        DB::table('ingredients')->insert([
            'order' => 3,
            'ingredient' => 'dried thyme',
            'denomination' => '1',
            'measurement' => 'tsp',
            'food_category' => 'seasoning',
            'recipe_id' => 3,
            'created_at' => now(),
        ]);
        DB::table('ingredients')->insert([
            'order' => 4,
            'ingredient' => 'zest of one lemon',
            'denomination' => '',
            'measurement' => '',
            'food_category' => 'produce',
            'recipe_id' => 3,
            'created_at' => now(),
        ]);
    }
}

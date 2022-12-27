<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class instructionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instructions')->insert([
            'order' => 1,
            'title' => 'Cook pasta al dente',
            'instruction' => 'Cook pasta in a large stockpot of generously-salted water until it is just 1 minute shy of al dente. (For ideal timing, I recommend adding the pasta to the boiling water after the mushrooms have been sautéing for 3 minutes, as indicated below.) Reserve 1 cup of the starchy pasta water for later, then drain the pasta.',
            'recipe_id' => 1,
            'created_at' => now(),
        ]);
        DB::table('instructions')->insert([
            'order' => 2,
            'title' => 'Sauté the mushrooms',
            'instruction' => 'Meanwhile as the pasta water heats, melt the butter in a large non-stick sauté pan over medium-high heat. Add the mushrooms and sauté for 6 to 8 minutes, stirring every 2 minutes or so, until browned. Add the garlic, rosemary and crushed red pepper flakes. Sauté for 2 minutes, stirring frequently.',
            'recipe_id' => 1,
            'created_at' => now(),
        ]);
        DB::table('instructions')->insert([
            'order' => 3,
            'title' => 'Put it all together',
            'instruction' => 'Add the heavy whipping cream, Parmesan, lemon juice and zest, and 1/4 cup of the starchy pasta water to the mushrooms and stir until combined. Add the baby spinach and canned tuna, followed by the pasta, and toss gently until the spinach begins to wilt.',
            'recipe_id' => 1,
            'created_at' => now(),
        ]);
        DB::table('instructions')->insert([
            'order' => 4,
            'title' => 'Season',
            'instruction' => 'If the pasta seems at all dry, add another 1/4 cup of starchy pasta water as needed. (Or you are welcome to add extra cream too.) Give the pasta a taste and season with salt and/or pepper as needed.',
            'recipe_id' => 1,
            'created_at' => now(),
        ]);
        DB::table('instructions')->insert([
            'order' => 4,
            'title' => 'Serve',
            'instruction' => 'Serve warm, garnished with extra Parmesan and freshly-cracked black pepper. Enjoy!',
            'recipe_id' => 1,
            'created_at' => now(),
        ]);
        DB::table('instructions')->insert([
            'order' => 1,
            'title' => 'Cook the salmon',
            'instruction' => 'Season the salmon filets generously with salt and pepper. Heat 1 tablespoon oil in a large non-stick skillet over medium-high heat. Place the salmon flesh-side-down in the skillet and sear, undisturbed, for 2-3 minutes or until golden. Flip the salmon over and cook for 2 minutes more, until it is nearly cooked through. Transfer the salmon to a clean plate and set aside.',
            'recipe_id' => 2,
            'created_at' => now(),
        ]);
        DB::table('instructions')->insert([
            'order' => 2,
            'title' => 'Burst the tomatoes',
            'instruction' => 'Add the remaining olive oil to the pan and reduce heat to medium. Add the tomatoes, garlic, crushed red pepper flakes and toss gently until evenly coated with the oil. Cook for about 10-15 minutes, stirring occasionally, until all of the tomatoes have burst and their juices have reduced to a sauce that is fairly thick. (After a few minutes of cooking, you can use a spoon to gently smash some of the tomatoes to release more of their juices, but I prefer to leave most of the tomatoes intact so that the sauce is nice and chunky.)',
            'recipe_id' => 2,
            'created_at' => now(),
        ]);
        DB::table('instructions')->insert([
            'order' => 3,
            'title' => 'Add the remaining ingredients',
            'instruction' => 'Gently stir in the heavy cream, basil, Parmesan, 1 teaspoon fine sea salt, and a few twists of black pepper until combined. Nestle the salmon filets into the sauce and continue cooking for 1-2 more minutes, or until the salmon is cooked through to your liking.',
            'recipe_id' => 2,
            'created_at' => now(),
        ]);
        DB::table('instructions')->insert([
            'order' => 4,
            'title' => 'Season',
            'instruction' => 'Taste and season the sauce with extra salt, pepper and/or crushed red pepper flakes as needed.',
            'recipe_id' => 2,
            'created_at' => now(),
        ]);
        DB::table('instructions')->insert([
            'order' => 1,
            'title' => 'Marinate Chicken',
            'instruction' => 'Place the first five ingredients (chicken through thyme) in a large bowl or Ziplock bag, and mix well so that the chicken is well coated. Cover/seal and refrigerate to marinate for 1-12 hours.',
            'recipe_id' => 3,
            'created_at' => now(),
        ]);
        DB::table('instructions')->insert([
            'order' => 2,
            'title' => 'Cook Chicken',
            'instruction' => 'When ready to cook, preheat the oven to 375 F degrees. Then remove drumsticks from marinade bowl/bag and place in a greased baking dish, and season with salt and pepper. Bake for 45-55 minutes, or until the juices run clear. For extra flavor, brush the drumsticks with more of the marinade about 20 minutes into baking. Serve immediately.',
            'recipe_id' => 3,
            'created_at' => now(),
        ]);
    }
}

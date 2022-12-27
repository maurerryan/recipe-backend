<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class notesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notes')->insert([
            'order' => 1,
            'title' => 'Rosemary',
            'note' => 'I always love the flavor of rosemary paired with mushrooms. But feel free to use whatever favorite Italian herbs you love best (amounts adjusted as needed).',
            'recipe_id' => 1,
            'created_at' => now(),
        ]);
        DB::table('notes')->insert([
            'order' => 2,
            'title' => 'Heavy whipping cream',
            'note' => 'If you would like to lighten this dish up, you are welcome to skip the cream and add in some extra lemon juice and Parmesan (plus extra starchy pasta water, as needed) to make this a simple lemony pasta.',
            'recipe_id' => 1,
            'created_at' => now(),
        ]);
        DB::table('notes')->insert([
            'order' => 3,
            'title' => 'Canned tuna',
            'note' => 'I also recommend purchasing good-quality canned tuna packed in olive oil.',
            'recipe_id' => 1,
            'created_at' => now(),
        ]);
        DB::table('notes')->insert([
            'order' => 1,
            'title' => 'Serving suggestions',
            'note' => 'We love serving this salmon either with crusty bread, pasta or rice. Then I also love tossing some fresh arugula with lemon juice, olive oil, Parmesan, salt and pepper as a light side salad. Delicious!',
            'recipe_id' => 2,
            'created_at' => now(),
        ]);
    }
}

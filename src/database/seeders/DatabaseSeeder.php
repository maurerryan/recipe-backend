<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(userSeeder::class);
        $this->call(recipesSeeder::class);
        $this->call(ingredientsSeeder::class);
        $this->call(instructionsSeeder::class);
        $this->call(notesSeeder::class);
    }
}

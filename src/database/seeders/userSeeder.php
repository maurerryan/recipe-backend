<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Frodo',
            'last_name' => 'Baggins',
            'username' => 'fbaggins',
            'email' => 'frodo.baggins@gmail.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'avatar' => 'https://i.pravatar.cc/150?img=3',
            'created_at' => now(),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Samwise',
            'last_name' => 'Gamgee',
            'username' => 'sgamgee',
            'email' => 'samwise.gamgee@gmail.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'avatar' => 'https://i.pravatar.cc/150?img=20',
            'created_at' => now(),
        ]);
    }
}

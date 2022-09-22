<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Review;
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
        \App\Models\User::factory(10)->create();

        Review::create([
            'title' => 'The Wedding',
            'tags' => 'romance, action',
            'author' => 'Kim Jisoo',
            'email' => 'email1@email.com',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?',
            'rating' => '4/5'
        ]);

        Review::create([
            'title' => 'The Diary of a Wimpy Kid',
            'tags' => 'comedy, kids',
            'author' => 'Jung Hae In',
            'email' => 'email2@email.com',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?',
            'rating' => '3/5'
        ]);

    }
}

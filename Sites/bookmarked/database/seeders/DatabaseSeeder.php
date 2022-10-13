<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();

        //for testing:
        $user = User::factory()->create([
            // 'uname' => 'test112233',
            // 'email' => 'testtest123@test.com'
        ]);

        //this user will be the owner of the factory-created posts
            //other users won't be able to edit nor delete this user's posts
        Review::factory(4)->create([
            'user_id' => $user->id
        ]);
        
        // Review::create([
        //     'title' => 'Les Miserables',
        //     'author' => 'Victor Hugo',
        //     'media_type' => 'Novel',
        //     'genre' => 'Historical Fiction',
        //     'tags' => 'Major Character Death, Graphic Violence, Adapted into a Musical, Romance',
        //     'summary' => 'Jean Valjean, a former criminal, gets a second chance at an honest life. Under the alias of \"Monsieur Madeleine\", he rises to great heights as the mayor of Montreuil-sur-Mer and even starts a family. However, his past returns to haunt him as his identity as a criminal is uncovered. Les Miserables is the story of one man\'s chance at redemption and reconciliation with family amidst the turmoil of the French Revolution.',
        //     'reviewer' => 'Nico Marcelino',
        //     'description' => 'Les Miserables is a good story but why did the author have to kill off all the major characters? Furthermore, what was the point of describing the Parisian sewers in great detail? It\'s not relevant at all to the story or to the setting...',
        // ]);

        // Review::create([
        //     'title' => 'The Wedding',
        //     'tags' => 'romance, action',
        //     'author' => 'Kim Jisoo',
        //     'email' => 'email1@email.com',
        //     'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?',
        //     'rating' => '4/5'
        // ]);

        // Review::create([
        //     'title' => 'The Diary of a Wimpy Kid',
        //     'tags' => 'comedy, kids',
        //     'author' => 'Jung Hae In',
        //     'email' => 'email2@email.com',
        //     'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?',
        //     'rating' => '3/5'
        // ]);

    }
}

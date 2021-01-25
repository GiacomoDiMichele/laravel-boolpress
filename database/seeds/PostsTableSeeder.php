<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
         for ($i=0; $i < 10; $i++) {
           $new_post = new Post();
           $new_post->title = $faker->word();
           $new_post->description = $faker->text();
           $new_post->publication_date = $faker->dateTime();
           $new_post->save();
       }
    }
}

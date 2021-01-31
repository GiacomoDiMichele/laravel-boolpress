<?php

use Illuminate\Database\Seeder;
use App\Tag;
use Faker\Generator as Faker;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 7; $i++) {

            $new_tag = new Tag();
            $new_tag->name = $faker->words(2, true);
            $new_tag->save();
        }
    }
}

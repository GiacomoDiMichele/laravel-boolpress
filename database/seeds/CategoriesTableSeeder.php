<?php

use Illuminate\Database\Seeder;
use App\Category;
use Faker\Generator as Faker;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 8; $i++) {
            $new_category = new Category();
            $new_category->name = $faker->words(2, true);
            $new_category->save();
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class placeToVisitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $place = new placeToVisitTableSeeder();

        $place->address = $faker->streetAddress();
        $place->city = $faker->city();
        $place->region = $faker->state();
        $place->province = $faker->word();
        $place->country = $faker->country();
        $place->description = $faker->realText();
        $place->squareMeters = $faker->numberBetween(40, 900);
    }
}

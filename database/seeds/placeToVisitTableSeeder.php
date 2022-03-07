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
        for ($i = 0; $i < 10; $i++) {
        $branch = new Branch();

        $branch->address = $faker->streetAddress();
        $branch->city = $faker->city();
        $branch->region = $faker->state();
        $branch->province = $faker->word();
        $branch->country = $faker->country();
        $branch->description = $faker->realText();
        $branch->squareMeters = $faker->numberBetween(40, 900);

        $branch->save();
        }
    }
}

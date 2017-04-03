<?php

use Illuminate\Database\Seeder;

class DogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 15; $i++) {
            $dog = new App\Dog;
            $dog->name = $faker->name;
            $dog->age = $faker->randomDigit;

            $dog->save();
        }
    }
}

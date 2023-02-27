<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class trainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {


        $train = new Train();

        $train->company = $faker->word();
        $train->company = $faker->word();
        $train->company = $faker->time();
        $train->company = $faker->time();
        $train->company = $faker->randomnumber(10, true);
        $train->company = $faker->randomDigitNotNull();
        $train->company = $faker->boolean();
        $train->company = $faker->boolean();

        $train->save();
    }
}

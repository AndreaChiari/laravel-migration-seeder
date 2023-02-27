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

        for ($i = 0; $i < 5; $i++) {
            $train = new Train();


            $train->company = $faker->word();
            $train->starting_station = $faker->word();
            $train->starting_time = $faker->time();
            $train->date = $faker->date();
            $train->destination_time = $faker->time();
            $train->train_number = $faker->numberBetween(1, 10);
            $train->wagon_number = $faker->randomDigitNotNull();
            $train->is_delay = $faker->boolean();
            $train->is_delete = $faker->boolean();

            $train->save();
        }
    }
}

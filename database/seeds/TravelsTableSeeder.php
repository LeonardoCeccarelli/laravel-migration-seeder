<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            $travel = new Travel();
            $travel->destination = $faker->word();
            $travel->departure_date = $faker->date();
            $travel->arrival_date = $faker->date();
            $travel->price = $faker->randomFloat(2, 50, 9999);
            $travel->description = $faker->text();
            $travel->save();
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($index = 0; $index < 10; $index++){
            $travel = new Travel();

            $travel->name = $faker->randomDigit();
            $travel->country_name = $faker->state();
            $travel->city_name = $faker->state();
            $travel->departure = $faker->date('Y_m_d');
            $travel->return = $faker->date('Y_m_d');
            $travel->b_b = $faker->boolean();
            $travel->half_board = $faker->boolean();
            $travel->full_board = $faker->boolean();
            $travel->price = $faker->numberBetween(1, 15000);

            $travel->save();
        }
        
    }
}

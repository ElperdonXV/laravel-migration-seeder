<?php

use Faker\Generator as Faker;
use App\Train;
use Illuminate\Database\Seeder;



class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $dates = [
            '2022/02/21 13:30:00',
            '2022/02/21 16:30:00',
            '2022/02/21 10:30:00',
            '2022/02/21 8:30:00',
        ];

        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->id = $faker->ean8();
            $train->agency = $faker->word();
            $train->departure_station = $faker->word();
            $train->arrival_station = $faker->word();
            $train->departures_time = $dates[rand(0, 3)];
            $train->arrival_time =  $dates[rand(0, 3)];
            $train->carriages = $faker->numberBetween(1, 30);;
            $train->in_time = $faker->boolean();
            $train->cancelled = $faker->boolean();
            $train->save();
        }
    }
}

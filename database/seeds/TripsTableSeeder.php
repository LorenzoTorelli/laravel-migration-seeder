<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {   
        for ($i = 0; $i < 100; $i++) {
            $newTrip = new Trip();
            $newTrip->NomeAzienda = $faker->word();
            $newTrip->NomeViaggio = $faker->word();
            $newTrip->Meta = $faker->city();
            $newTrip->DataPartenza = $faker->dateTimeBetween('+0 days', '+2 years');
            $newTrip->Notti = $faker->randomNumber(2, false);
            $newTrip->CostoViaggio = $faker->randomNumber(4, false);
            $newTrip->NumeroPersoneMax =$faker->randomNumber(2, false);
            $newTrip->save();
        }
    }
}

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
        for ($i = 0; $i < 10; $i++){
            $new_travel = new Travel();
            $new_travel->stato= $faker->country();
            $new_travel->città= $faker->city();
            $new_travel->descrizione= $faker->paragraph();
            $new_travel->durata_giorni= $faker->numberBetween(2, 7);
            $new_travel->prezzo= $faker->randomFloat(2, 20, 30);
            $new_travel->save();

        }
    }
}

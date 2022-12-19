<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class trains_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0;$i<10;$i++){
            $newTrain = new Train();
            $newTrain->azienda = $faker->name;
            $newTrain->stazione_di_partenza = $faker->name;
            $newTrain->stazione_di_arrivo = $faker->name;
            $newTrain->orario_di_partenza = $faker->time();
            $newTrain->orario_di_arrivo = $faker->time();
            $newTrain->codice_treno = $faker->randomNumber(5, false);
            $newTrain->numero_carrozze = $faker->randomDigit();
            $newTrain->save();
        }
    }
}

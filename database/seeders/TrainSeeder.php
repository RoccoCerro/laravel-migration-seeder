<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;
use App\Models\Trains;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // svuota ogni volta la tabella
        DB::table('trains')->truncate();

        // creaimo l'istanza del model House
        for ($i = 0; $i < 1000; $i++){
            $new_train = new Trains();

            // popolare le proprietà dell'istanza
            $new_train->brand = $faker->randomElement(['Trenitalia','Trenord','Italo Treno','Frecciarossa']);
            $new_train->arrival_station = $faker->city();
            $new_train->departure_station = $faker->city();
            $new_train->departure_time = $faker->dateTimeThisDecade();
            $new_train->arrival_time = $faker->dateTimeInInterval($data = $new_train->departure_time, '+3 days');
            $new_train->train_code = $faker->bothify('??-#########');
            $new_train->number_of_carriages = $faker->numberBetween(6, 20);
            $new_train->in_time = $faker->randomElement([true,false]);
            $new_train->deleted = $faker->randomElement([true,false]);

            // var_dump($new_train->departure_time);

            // salviamo i dati con il metodo save()
            $new_train->save();
        }
    }
}

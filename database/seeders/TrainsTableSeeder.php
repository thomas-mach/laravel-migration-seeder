<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        DB::table('trains')->truncate();

        for ($i = 0; $i < 100; $i++) {
            $new_train = new Train();

            // $data_di_partenza = $faker->dateTimeBetween('now', '+1 year');
            // $data_di_arrivo = $faker->dateTimeBetween($data_di_partenza, '+2 days');
            $data_di_partenza = $faker->dateTimeBetween('now', '+1 year');
            $max_arrivo = clone $data_di_partenza;
            $max_arrivo->modify('+2 days');
            $data_di_arrivo = $faker->dateTimeBetween($data_di_partenza, $max_arrivo);

            $orario_di_partenza = $faker->time();
            $orario_di_arrivo = $faker->dateTimeBetween($orario_di_partenza, '+12 hours');

            $in_orario = $faker->boolean();
            $cancellato = !$in_orario;

            $new_train->azienda = $faker->company();
            $new_train->stazione_di_partenza = $faker->city();
            $new_train->stazione_di_arrivo = $faker->city();
            $new_train->data_di_partenza = $data_di_partenza->format('Y-m-d');
            $new_train->orario_di_partenza = $orario_di_partenza;
            $new_train->data_di_arrivo = $data_di_arrivo->format('Y-m-d');
            $new_train->orario_di_arrivo = $orario_di_arrivo;
            $new_train->codice_treno = $faker->bothify('??-####');
            $new_train->numero_carrozze = $faker->numberBetween(1, 200);
            $new_train->in_orario = $in_orario;
            $new_train->cancellato = $cancellato;

            $new_train->save();
        }
    }
}

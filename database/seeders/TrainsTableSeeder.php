<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->Azienda = $faker->text(10);
            $train->Stazione_di_partenza = $faker->city();
            $train->Stazione_di_arrivo = $faker->city();
            $train->Orario_di_partenza = $faker->randomElement(['oggi', 'domani', 'dopodomani']);
            $train->Orario_di_arrivo = $faker->randomElement(['oggi', 'domani', 'dopodomani']);
            $train->Codice_treno = $faker->numberBetween(1000, 10000);
            $train->Numero_carrozze = $faker->numberBetween(3, 20);
            $train->In_orario = $faker->randomElement([true, false]);
            $train->Cancellato = $faker->randomElement([true, false]);
            $train->save();
        }
    }
}

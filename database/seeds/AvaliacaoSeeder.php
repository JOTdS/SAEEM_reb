<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AvaliacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
    	foreach (range(1,15) as $index) {
	        App\Avaliacao::create([
              'data' => $faker->date,
              'nota' => $faker->randomFloat(2, 0, 10),
              'descricao' => $faker->text(240),
	        ]);
      }
	}
}

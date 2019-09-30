<?php

use Illuminate\Database\Seeder;

class AvaliacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();
      for($g = 1; $g <= 99; $g++){
	        App\Avaliacao::create([
              'data' => $faker->date,
              'nota' => $faker->randomFloat(2, 0, 10),
              'descricao' => $faker->text(190),
	        ]);
      }
	}
}

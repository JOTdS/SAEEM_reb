<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DisciplinaSeeder extends Seeder
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

        \App\Disciplina::create([
            'nome' => $faker->text(80),
            'descricao' => $faker->text(200),
          ]);
      }
    }
}

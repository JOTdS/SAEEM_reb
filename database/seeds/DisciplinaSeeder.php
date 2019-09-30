<?php

use Illuminate\Database\Seeder;

class DisciplinaSeeder extends Seeder
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
        $nome =$faker->name;
        \App\Disciplina::create([
          'nome' => $nome,
          'descricao' => $faker->text(190),
          ]);
      }
    }
}

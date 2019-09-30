<?php

use Illuminate\Database\Seeder;

class EscolaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();
      $tipo = ['kilombola', 'municipal', 'distrital'];

      $gestores = \App\Gestor::All();

      for($g = 1; $g <= 99; $g++){
        $nome = $faker->name;
          \App\Escola::create([
              'nome' => $nome,
              'descricao' => $faker->text(190),
              'endereco' => $faker->address,
              'id_gestor' => $gestores[$faker->numberBetween(0, 48)]->id,
              'telefone' => $faker->tollFreePhoneNumber,
              'modalidade' => $tipo[$faker->numberBetween(0,2)],
              'inep' => $faker->numberBetween(10000000, 99999999)
            ]);
        }
    }
}

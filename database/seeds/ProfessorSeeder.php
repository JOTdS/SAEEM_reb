<?php

use Illuminate\Database\Seeder;

class ProfessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($g = 1; $g <= 80; $g++){
            $nome =$faker->name;

            $sexo = ['M', 'F'];
            \App\Pessoa::create(['nome' => $nome,
                'cpf' => $faker->numberBetween(10000000000, 99999999999),
                'telefone' => $faker->phoneNumber,
                'endereco' => $faker->address,
                'descricao' => $faker->text(200),
                'password' => $faker->text(32),
                'sexo' => $sexo[$faker->numberBetween(0,1)],
                'is_professor' => true]);

            $pes = DB::select('select * from pessoas where nome = ?', [$nome]);
            $formacao = ['Portugues', 'Matematica', 'Ciencias', 'Quimica', 'Historia', 'Geografia'];


            \App\Professor::create(['id_pessoa' => $pes[0]->id,
                'formacao' => $formacao[$faker->numberBetween(0,5)]]);
        }
    }
}

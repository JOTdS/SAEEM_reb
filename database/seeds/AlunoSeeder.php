<?php

use Illuminate\Database\Seeder;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($g = 1; $g <= 483; $g++){
            $nome =$faker->name;

            $sexo = ['M', 'F'];
            \App\Pessoa::create(['nome' => $nome,
                'cpf' => $faker->numberBetween(10000000000, 99999999999),
                'telefone' => $faker->phoneNumber,
                'endereco' => $faker->address,
                'descricao' => $faker->text(200),
                'password' => $faker->text(32),
                'sexo' => $sexo[$faker->numberBetween(0,1)],
                'is_aluno' => true]);

            $pes = DB::select('select * from pessoas where nome = ?', [$nome]);


            \App\Aluno::create(['id_pessoa' => $pes[0]->id,
                'id_turma' => null,
                'nascimento' => $faker->date('d-m-Y'),
                'filiacao' => $faker->name]);
        }
    }
}

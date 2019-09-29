<?php

use Illuminate\Database\Seeder;

class FuncionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($g = 1; $g <= 208; $g++){
            $nome =$faker->name;

            \App\Pessoa::create(['nome' => $nome,
                'cpf' => $faker->numberBetween(10000000000, 99999999999),
                'telefone' => $faker->phoneNumber,
                'endereco' => $faker->address,
                'descricao' => $faker->text(200),
                'password' => $faker->text(32),
                'is_administrador' => true]);

            $pes = DB::select('select * from pessoas where nome = ?', [$nome]);
            $cargo = ['Zelador', 'Cozinheiro', 'Coordenador', 'Serviços Gerais',
                         'Agente Administrativo', 'Administrativo', 'Porteiro', 'Inspetor'];


            \App\Funcionario::create(['id_pessoa' => $pes[0]->id,
                'id_escola' => null,
                'cargo' => $cargo[$faker->numberBetween(0,7)]]);
        }
    }
}

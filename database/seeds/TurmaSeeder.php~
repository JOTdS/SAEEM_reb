<?php

use Illuminate\Database\Seeder;

class TurmaSeeder extends Seeder
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
            $modal = ['Presencial','EAD'];

            \App\Turma::create(['nome' => $nome,
                'modalidade' => $modal[$faker->numberBetween(0,1)],
                'descricao' => $faker->text(200)]);

            $esc = DB::select('select * from escolas where nome = ?', [$nome]);

            \App\Turma::create(['id_escola' => $esc[0]->id,
                'id_professor' => null, 
                'id_disciplina' => null]);
            
            //$table->integer('id_escola');
            //$table->foreign('id_escola')->references('id')->on('escolas');
            //$table->integer('id_professor');
            //$table->foreign('id_professor')->references('id')->on('professors');
            //$table->integer('id_disciplina');
            //$table->foreign('id_disciplina')->references('id')->on('disciplina');
        }
    }
}

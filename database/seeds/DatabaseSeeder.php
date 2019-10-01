<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(GestorSeeder::class);
        $this->call(ProfessorSeeder::class);
        $this->call(FuncionarioSeeder::class);
        $this->call(AlunoSeeder::class);
        $this->call(EscolaSeeder::class);
        $this->call(TurmaSeeder::class);
        $this->call(DisciplinaSeeder::class);
        $this->call(AvaliacaoSeeder::class);
        $this->call(GradeHorarioSeeder::class);
        $this->call(HorarioSeeder::class);
    }
}

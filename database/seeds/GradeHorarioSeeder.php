<?php

use Illuminate\Database\Seeder;

class GradeHorarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Grade_Horario', 200)->create();
    }
}

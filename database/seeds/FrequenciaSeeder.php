<?php

use Illuminate\Database\Seeder;

class FrequenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Frequencia', 120)->create();
    }
}

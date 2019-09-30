<?php

use Illuminate\Database\Seeder;

class GestorSeeder extends Seeder
{
    /**
     * Run the database seeds.
   $quant_gestor  *
     * @return void
     */
    public function run(){
        factory('App\Gestor', 50)->create();
    }
}

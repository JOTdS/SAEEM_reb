<?php

use Illuminate\Database\Seeder;

class AvaliacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory('App\Avaliacao', 200)->create();
	}
}

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Grade_Horario::class, function (Faker $faker) {
    return [
      'id_disciplina' => function(){return factory(\App\Disciplina::class)->create()->id;}
    ];
});

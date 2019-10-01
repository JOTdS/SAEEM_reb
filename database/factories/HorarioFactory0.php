<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Horario::class, function (Faker $faker) {
    $diaSemana = ['segunda', 'terça', 'quarta', 'quinta', 'sexta'];
    return [
      'id_grade_horario' => function(){return factory(\App\Grade_Horario::class)->create()->id;},
      'diaDaSemana' => $diaSemana[$faker->numberBetween(0,4)],
      'horaInicio' => $faker->time,
      'horaFim' => $faker->time
    ];
});

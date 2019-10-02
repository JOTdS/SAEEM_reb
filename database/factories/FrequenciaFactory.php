<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Frequencia::class, function (Faker $faker) {

    $presenca = ['Falta', 'Presença'];

    return [
        'id_disciplina' => function(){return factory(\App\Disciplina::class)->create()->id;},
        'id_aluno' => function(){return factory(\App\Aluno::class)->create()->id;},
        'data' => $faker->date,
        'status' => $presenca[$faker->numberBetween(0,1)],
        'descricao' => $faker->text(190)
    ];
});

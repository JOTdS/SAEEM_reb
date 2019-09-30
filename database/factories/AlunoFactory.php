<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Aluno::class, function (Faker $faker) {
    return [
        'id_pessoa' => function(){return factory(\App\Pessoa::class)->create()->id;},
        'id_turma' => null,
        'nascimento' => $faker->date('d-m-Y'),
        'filiacao' => $faker->name
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Aluno::class, function (Faker $faker) {
    return [
        'id_pessoa' => function(){return factory(\App\Pessoa::class)->create()->id;},
        'id_turma' => function(){return factory(\App\Turma::class)->create()->id;},
        'nascimento' => $faker->date('d-m-Y'),
        'filiacao' => $faker->name
    ];
});

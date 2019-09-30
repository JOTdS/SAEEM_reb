<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Avaliacao::class, function (Faker $faker) {    
    return [
        'id_aluno' => function(){return factory(\App\Aluno::class)->create()->id;},
        'id_disciplina' => function(){return factory(\App\Disciplina::class)->create()->id;},
        'data' => $faker->date,
        'nota' => $faker->randomFloat(2, 0, 10),
        'descricao' => $faker->text(190)
    ];
});

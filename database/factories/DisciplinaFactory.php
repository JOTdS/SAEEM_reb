<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Disciplina::class, function (Faker $faker) {
  $nome = $faker->name;
    return [
        'id_professor' => function(){return factory(\App\Professor::class)->create()->id;},
        'id_aluno' => function(){return factory(\App\Aluno::class)->create()->id;},
        'id_turma' => function(){return factory(\App\Turma::class)->create()->id;},
        'nome' => $nome,
        'descricao' => $faker->text(190)
    ];
});

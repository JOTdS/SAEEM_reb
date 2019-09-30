<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Funcionario::class, function (Faker $faker) {

    $cargo = ['Zelador', 'Cozinheiro', 'Coordenador', 'Serviços Gerais',
        'Agente Administrativo', 'Administrativo', 'Porteiro', 'Inspetor'];

    return [
        'id_pessoa' => function(){return factory(\App\Pessoa::class)->create()->id;},
        'id_escola' => null,
        'cargo' => $cargo[$faker->numberBetween(0,7)]
    ];
});

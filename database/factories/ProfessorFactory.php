<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Professor::class, function (Faker $faker) {
    $formacao = ['Portugues', 'Matematica', 'Ciencias', 'Quimica', 'Historia', 'Geografia'];
    return [
        'id_pessoa' => function(){return factory(\App\Pessoa::class)->create()->id;},
        'formacao' => $formacao[$faker->numberBetween(0,5)]
    ];
});

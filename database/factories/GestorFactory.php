<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Gestor::class, function (Faker $faker) {
    return [
        'id_pessoa' => function(){return factory(\App\Pessoa::class)->create()->id;},
        'formacao' => $faker->title
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Pessoa::class, function (Faker $faker) {
    $sexo = ['M', 'F'];
    return [
        'nome' => $faker->name,
            'cpf' => $faker->numberBetween(10000000000, 99999999999),
            'telefone' => $faker->phoneNumber,
            'endereco' => $faker->address,
            'descricao' => $faker->text(200),
            'password' => $faker->text(32),
            'sexo' => $sexo[$faker->numberBetween(0,1)],
            'is_aluno' => true
    ];
});

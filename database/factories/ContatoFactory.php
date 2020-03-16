<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contato;
use Faker\Generator as Faker;

$factory->define(Contato::class, function (Faker $faker) {
    return [
        'ddd' => $faker->randomNumber(),
        'telefone' => $faker->word,
        'funcionario_id' => factory(\App\Funcionario::class),
    ];
});

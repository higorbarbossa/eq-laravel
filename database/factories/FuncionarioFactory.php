<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Funcionario;
use Faker\Generator as Faker;

$factory->define(Funcionario::class, function (Faker $faker) {
    return [
        'nome' => $faker->word,
        'cpf' => $faker->word,
        'ctps' => $faker->word,
        'setor_id' => factory(\App\Setor::class),
    ];
});

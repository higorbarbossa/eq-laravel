<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Setor;
use Faker\Generator as Faker;

$factory->define(Setor::class, function (Faker $faker) {
    return [
        'descricao' => $faker->word,
    ];
});

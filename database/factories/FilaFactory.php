<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Departamento;
use App\Fila;
use Faker\Generator as Faker;

$factory->define(Fila::class, function (Faker $faker) {
    return [
        'user_id' => factory('App\User')->create(),
        'departamento_id' => Departamento::where('nome', 'Departamento de Ciência da Computação')->first()
    ];
});

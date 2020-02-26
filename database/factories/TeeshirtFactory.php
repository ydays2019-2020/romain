<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Teeshirt;
use Faker\Generator as Faker;

$factory->define(Teeshirt::class, function (Faker $faker) {
    return [
        'nom' => "Epsilon Flex",
        'description' => "Le tee-shirt Epsilon Flex est 
        confectionné dans un tissu en coton doux et présente une coupe décontractée et légèrement carrée.",
        'prix' => "20€",
        'image' => "",
        'tailleS' => "10",
        'tailleM' => "10",
        'tailleL' => "10",
        'tailleXL' => "10",
    ];
});

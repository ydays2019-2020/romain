<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pantalon;
use Faker\Generator as Faker;

$factory->define(Pantalon::class, function (Faker $faker) {
    return [
        'nom' => "Epsilon Slim",
        'description' => "Composé d'un mélange de maille et de tissu tissé, le pantalon Jordan Wings Diamond présente une variété de textures qui s’associent pour un look et un confort uniques.",
        'prix' => "80",
        'image' => "",
        'tailleS' => "10",
        'tailleM' => "10",
        'tailleL' => "10",
        'tailleXL' => "10",
    ];
});

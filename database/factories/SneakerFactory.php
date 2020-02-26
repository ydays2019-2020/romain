<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Sneaker;
use Faker\Generator as Faker;

$factory->define(Sneaker::class, function (Faker $faker) {
    return [
        'nom' => "Epsilon Element Flex",
        'description' => "La Epsilon Element Flex s'inspire des chaussures de running classiques, telles que la Nike Internationalist, et est dotée de la technologie Epsilon Element Flex.",
        'prix' => "40",
        'image' => "",
        'taille36' => '10',
        'taille37' => '10',
        'taille38' => '10',
        'taille39' => '10',
        'taille40' => '10',
        'taille41' => '10',
        'taille42' => '10',
        'taille43' => '10',
        'taille44' => '10',
        'taille45' => '10',
        'taille46' => '10',
        'taille47' => '10',
    ];
});

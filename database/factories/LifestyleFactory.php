<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Lifestyle;
use Faker\Generator as Faker;

$factory->define(Lifestyle::class, function (Faker $faker) {
    return [
        'nom' => 'Espilon Air 2020',
        'description' => "Rafraîchissez votre style et entrez dans un 
        nouvel univers avec la Epsilon Air 2020. 
        Elle associe un design moderne à un style basketball emblématique 
        pour un look audacieux et un confort exceptionnel sous le pied.",
        'prix' => "100€",
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

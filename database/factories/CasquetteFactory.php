<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Casquette;
use Faker\Generator as Faker;

$factory->define(Casquette::class, function (Faker $faker) {
    return [
        'nom' => "Epsilon",
        'description' => "La casquette Nike est confectionnée dans un tissu 
        en coton sergé doux et présente une structure classique à six 
        empiècements pour une protection confortable. 
        La lanière réglable à l’arrière offre une tenue parfaitement ajustée.",
        'prix' => "15€",
        'image' => "",
        'tailleS' => "10",
        'tailleM' => "10",
        'tailleL' => "10",
        'tailleXL' => "10",
    ];
});

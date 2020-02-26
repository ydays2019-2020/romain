<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Manteau;
use Faker\Generator as Faker;

$factory->define(Manteau::class, function (Faker $faker) {
    return [
        'nom' => "Epsilon Sportswear",
        'description' => "La veste à capuche Epsilon Sportswear associe isolation légère et design réversible pour un look polyvalent et fonctionnel. Elle affiche d'un côté des couleurs éclatantes et des lignes à chevrons classiques, tandis que l'autre côté présente une couleur unie avec un look inspiré d'une veste aviateur.",
        'prix' => "110",
        'image' => "",
        'tailleS' => "10",
        'tailleM' => "10",
        'tailleL' => "10",
        'tailleXL' => "10",
    ];
});

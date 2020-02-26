<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Short;
use Faker\Generator as Faker;

$factory->define(Short::class, function (Faker $faker) {
    return [
        'nom' => "Epsilon Flex",
        'description' => "Confectionné dans un tissu extensible léger, le short Epsilon Flex suit vos mouvements durant vos entraînements les plus intenses. Sa taille élastique repliable vous permet d'ajuster la tenue pour maintenir le short en place.",
        'prix' => "40",
        'image' => "",
        'tailleS' => "10",
        'tailleM' => "10",
        'tailleL' => "10",
        'tailleXL' => "10",
    ];
});

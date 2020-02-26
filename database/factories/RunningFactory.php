<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Running;
use Faker\Generator as Faker;

$factory->define(Running::class, function (Faker $faker) {
    return [
        'nom' => "Epsilon Run",
        'description' => "La nouvelle Epsilon Run est conçue pour réduire les risques de blessure et vous permettre de rester dans la course. Grâce à la mousse supplémentaire et aux détails améliorés de l'empeigne, elle offre une sensation de maintien et un amorti optimal. Enfilez-la et découvrez votre vrai potentiel dès le premier kilomètre.",
        'prix' => "110",
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

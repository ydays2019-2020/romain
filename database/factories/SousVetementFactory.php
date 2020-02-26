<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SousVetement;
use Faker\Generator as Faker;

$factory->define(SousVetement::class, function (Faker $faker) {
    return [
        'nom' => "Epsilon",
        'description' => "Conçu pour vous offrir un confort optimal avant, pendant et après l'entraînement, le sous-vêtement Epsilon remplit cette fonction tout au long de la journée, à la maison, à la salle de gym et partout ailleurs. Sa conception légère et respirante offre une tenue décontractée et ajustée qui reste en place pendant l'activité physique ou la récupération après l'effort.",
        'prix' => "25",
        'image' => "",
        'tailleS' => "10",
        'tailleM' => "10",
        'tailleL' => "10",
        'tailleXL' => "10",
    ];
});

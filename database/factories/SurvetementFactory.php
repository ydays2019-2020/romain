<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Survetement;
use Faker\Generator as Faker;

$factory->define(Survetement::class, function (Faker $faker) {
    return [
        'nom' => "Epsilon Phenom",
        'description' => "Le pantalon Epsilon Phenom est conçu pour une superposition confortable par temps froid. Le tissu résistant aux intempéries offre une protection ciblée pour vous aider à rester au sec et vous offrir une sensation de chaleur optimale. Ses zips au niveau de la cheville permettent de l'enfiler et de le retirer facilement après l'échauffement.",
        'prix' => "95",
        'image' => "",
        'tailleS' => "10",
        'tailleM' => "10",
        'tailleL' => "10",
        'tailleXL' => "10",
    ];
});

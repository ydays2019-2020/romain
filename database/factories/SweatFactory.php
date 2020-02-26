<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Sweat;
use Faker\Generator as Faker;

$factory->define(Sweat::class, function (Faker $faker) {
    return [
        'nom' => "Epislon Hoodie",
        'description' => "Le pull à capuche Epsilon vient rehausser un look classique et confortable avec des motifs contrastants et des détails premium.",
        'prix' => "60€",
        'image' => "",
        'tailleS' => "10",
        'tailleM' => "10",
        'tailleL' => "10",
        'tailleXL' => "10",
    ];
});

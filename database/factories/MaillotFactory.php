<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Maillot;
use Faker\Generator as Faker;

$factory->define(Maillot::class, function (Faker $faker) {
    return [
        'nom' => "Epsilon all-star",
        'description' => "Le maillot Epsilon all-star présente des détails caractéristiques de la marque sur un 
        tissu ultra-respirant pour vous permettre de rester au sec et de 
        bénéficier d’un maximum de fraîcheur sur le terrain comme dans 
        les tribunes.",
        'prix' => "40€",
        'image' => "",
        'tailleS' => "10",
        'tailleM' => "10",
        'tailleL' => "10",
        'tailleXL' => "10",
    ];
});

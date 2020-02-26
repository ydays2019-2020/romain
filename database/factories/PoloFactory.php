<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Polo;
use Faker\Generator as Faker;

$factory->define(Polo::class, function (Faker $faker) {
    return [
        'nom' => "Epsilon Polo",
        'description' => "Conçu pour apporter une touche de luxe, le polo Epsilon Polo présente un tissu piqué haut de gamme et le style classique d'un vêtement en coton. Mais ne vous fiez pas aux apparences. Sa conception respirante et la technologie Dri-FIT garantissent un maximum de tenue et de confort. Cet indispensable streetwear idéal pour le parcours ou le terrain va devenir votre haut de fitness préféré.",
        'prix' => "60",
        'image' => "",
        'tailleS' => "10",
        'tailleM' => "10",
        'tailleL' => "10",
        'tailleXL' => "10",
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Chaussette;
use Faker\Generator as Faker;

$factory->define(Chaussette::class, function (Faker $faker) {
    return [
        'nom' => "Epsilon Everyday",
        'description' => "Donnez le meilleur de vous-même pendant vos 
        entraînements avec les chaussettes Epsilon Everyday. Les fibres douces 
        intègrent une technologie anti-transpiration pour garder vos pieds 
        au sec et leur offrir un maximum de confort.",
        'prix' => "10€",
        'image' => "",
        'tailleS' => "10",
        'tailleM' => "10",
        'tailleL' => "10",
        'tailleXL' => "10",
    ];
});

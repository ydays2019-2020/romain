<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Coque;
use Faker\Generator as Faker;

$factory->define(Coque::class, function (Faker $faker) {
    return [
        'nom' => 'Coque Epsilon',
        'description' => "l'étui rigide Nike en forme de semelle de chaussure 
        protège votre iPhone contre les chocs et les rayures." ,
        'prix' => "20€",
        'image' => "",
        'iphone10' => "10",
        'iphone10max' => "10",
        'iphone11' => "10",
        'iphone11max' => "10",
        'samsung' => "10",
    ];
});

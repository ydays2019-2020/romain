<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Sticker;
use Faker\Generator as Faker;

$factory->define(Sticker::class, function (Faker $faker) {
    return [
        'nom' => "Epsilon Sticker",
        'description' => "Sticker Epsilon",
        'prix' => "5",
        'image' => "",
    ];
});

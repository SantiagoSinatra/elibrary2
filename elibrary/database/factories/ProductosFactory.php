<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence($nbWords = 3),
        'description' => $faker->sentence($nbWords = 10),
        "categoria_id" => $faker->numberBetween($min=1, $max=5),
        "precio" => $faker->numberBetween($min=999, $max=9999),
        "imageLoc" =>$faker->imageUrl($width = 640, $height = 480),
        "imageLoc2" =>$faker->imageUrl($width = 640, $height = 480),
    ];
});

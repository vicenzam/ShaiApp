<?php

use Faker\Generator as Faker;

$factory->define(App\Tag::class, function (Faker $faker) {
    $title = $faker->unique()->word(5);
    return [
        'name' => $title,
        'color' => $faker->hexcolor,
        'type'      => $faker->randomElement(['INGRESO', 'EGRESO']),
        'description' => $faker->text(40),
    ];
});

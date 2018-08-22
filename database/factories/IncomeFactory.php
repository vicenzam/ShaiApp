<?php

use Faker\Generator as Faker;

$factory->define(App\Income::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'amount' => $faker->randomFloat(2,0,2000),
        'date'    => $faker->date(),
        'observation' => $faker->text(80),
    ];
});

<?php

use Faker\Generator as Faker;

$factory->define(App\IncomeTag::class, function (Faker $faker) {
    $title = $faker->unique()->word(5);
    return [
        'income_id'   => rand(1,30),
        'name'        => $title,
        'color'       => $faker->hexcolor,        
        'description' => $faker->text(40),
    ];
});
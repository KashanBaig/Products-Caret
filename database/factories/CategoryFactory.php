<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'Cat_name'=> $faker->jobTitle
    ];
});

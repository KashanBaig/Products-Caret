<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'Prod_name'=> $faker->name,
        'Prod_price'=> '1000',
        'Cat_id'=> function () {
            return factory(App\Category::class)->create()->id;
        }       
    ];
});

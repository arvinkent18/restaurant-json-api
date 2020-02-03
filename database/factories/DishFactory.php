<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Dish;
use Faker\Generator as Faker;

$factory->define(Dish::class, function (Faker $faker) {
    return [
        'restaurant_id' => function () {
            return factory(App\Restaurant::class)->create()->id;
        },
        'name' => $faker->name,
        'rating' => $faker->randomDigit(),
    ];
});

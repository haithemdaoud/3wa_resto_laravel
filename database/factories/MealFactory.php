<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Meal;
use Faker\Generator as Faker;

$factory->define(Meal::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'photo' => $faker->image($dir, $width, $height, 'meals', false),
        'description' => $faker->text($maxNbChars = 200),
        'quantity_in_stock' => $faker->randomNumber($nbDigits = 3, $strict = false),
        'buy_price' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = NULL),
        'sale_price' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = NULL),
        'created_at' => now(),
        'updated_at' => now()
    ];
});

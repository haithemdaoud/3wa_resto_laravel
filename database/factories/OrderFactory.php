<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use App\User;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'total_amount' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = NULL),
        'tax_rate' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = NULL),
        'tax_amount' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = NULL),
        'user_id' => User::get('id')->random(),
        'created_at' => now(),
        'updated_at' => now()
    ];
});

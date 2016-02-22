<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'purchase_price' => $faker->numberBetween(50, 100),
        'sell_price' => $faker->numberBetween(100, 200),
    ];
});

$factory->define(App\Transaction::class, function (Faker\Generator $faker) {
    return [
        'product_id' => null,
        'quantity' => $faker->numberBetween(-10, 10),
        'price' => $faker->numberBetween(100, 200),
    ];
});

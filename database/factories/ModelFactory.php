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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'username' => $faker->unique()->name(),
        'password' => $password ?: $password = bcrypt('secret'),
    ];
});

$factory->define(App\Models\Ad::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->word(),
        'description' => $faker->paragraph(5),
    ];
});

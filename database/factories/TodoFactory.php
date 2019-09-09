<?php

/** @var Factory $factory */

use App\Todo;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Todo::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName('male'),
        'description' => $faker->paragraph(4),
        'completed' => false,
    ];
});

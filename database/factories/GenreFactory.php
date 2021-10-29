<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Genre;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Genre::class, function (Faker $faker) {
    return [
        'nama' => $faker->unique()->word,
    ];
});

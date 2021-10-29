<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Band;
use Faker\Generator as Faker;

$factory->define(Band::class, function (Faker $faker) {
    $picture = [
    '1','2','3','4','5','6',
    '1634138718 - the smiths',
    '1634139473 - Radiohead_16_9_1591112885',
    '1634213230 - Nirvana',
    '1634213369 - Talking head'];

    $fileName = $picture[random_int(0,9)] . '.jpg';

    return [
        'namaband' => $faker->name,
        'albumband' => $faker->company(),
        'gambarband' => "{$fileName}",
        
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Participator::class, function (Faker $faker) {
    return [
        'position' => random_int(1, 10),
        'full_name' => $faker->name,
        'score' => null
    ];
});

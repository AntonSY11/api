<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Models\TournamentRound::class, function (Faker $faker) {
    return [
        'round_name' => $faker->word,
        'order' => random_int(1, 4),
    ];
});

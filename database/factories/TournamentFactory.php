<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Models\Tournament::class, function (Faker $faker) {
    return [
        'sport_type_id' => \App\Models\SportType::all()->random()->id,
        'tournament_format_id' => \App\Models\TournamentFormats::first()->id,
        'link' => \Illuminate\Support\Str::random(16),
        'title' => $faker->words(5, true),
        'description' => $faker->text(),
        'approved_at' => null,
        'started_at' => now()->subDays(3),
        'finished_at' => null
    ];
});

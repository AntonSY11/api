<?php

use Illuminate\Database\Seeder;

class TournamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tournament = factory(\App\Models\Tournament::class)->create();

        $tournamentRounds = factory(\App\Models\TournamentRound::class, 2)
            ->create([
                'tournament_id' => $tournament->id
            ]);

        foreach ($tournamentRounds as $tournamentRound) {
            factory(\App\Models\Participator::class, 2)->create([
                'tournament_round_id' => $tournamentRound->id
            ]);
        }
    }
}

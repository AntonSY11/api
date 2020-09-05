<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TournamentRound extends Model
{
    protected $fillable = [
        'tournament_id',
        'round_name',
        'order',
        'started_at',
        'finished_at',
    ];
}

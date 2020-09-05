<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participator extends Model
{
    protected $fillable = [
        'tournament_round_id',
        'user_id',
        'position',
        'full_name',
        'score'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected $fillable = [
        'sport_type_id',
        'tournament_format_id',
        'link',
        'title',
        'description',
        'approved_at',
        'started_at',
        'finished_at',
    ];
}

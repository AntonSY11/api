<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TournamentFormats extends Model
{
    protected $fillable = [
        'key',
        'name',
        'handler',
    ];

    public $timestamps = false;
}

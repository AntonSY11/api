<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TournamentFormat extends Model
{
    protected $fillable = [
        'key',
        'name',
        'handler',
    ];

    public $timestamps = false;
}

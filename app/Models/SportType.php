<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SportType extends Model
{
    protected $fillable = [
        'key',
        'name',
        'image_url'
    ];

    public $timestamps = false;
}

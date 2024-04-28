<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'image_url',
    ];
}

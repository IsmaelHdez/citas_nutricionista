<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NonWorkableDay extends Model
{
    //
    protected $guarded = [];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'date' => 'date',
        'year' => 'integer',
    ];
}

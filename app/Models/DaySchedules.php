<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DaySchedules extends Model
{
    //
    protected $fillable = [
        'schedule_id',
        'weekday',
        'start',
        'end',
    ];

    protected $casts = [
        'start' => 'datetime',
        'end' => 'datetime',
    ];

    public function schedule()
    {
        return $this->belongsTo(Schedules::class);
    }
}

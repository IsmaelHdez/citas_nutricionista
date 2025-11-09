<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Enums\EnumStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Models\DaySchedules;

class Schedules extends Model
{
    //
    protected $fillable = [
        'name',
        'status',
        'start',
        'end',
    ];

    protected $casts = [
        'start' => 'datetime:H:i',
        'end' => 'datetime:H:i',
        'status' => EnumStatus::class,
    ];

    public function daySchedules()
    {
        return $this->hasMany(DaySchedules::class);
    }
}

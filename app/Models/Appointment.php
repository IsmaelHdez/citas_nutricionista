<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Enums\EnumStatus;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'appointment_type_id',
        'status',
        'start',
        'end',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'status' => EnumStatus::class,
        'start' => 'datetime',
        'end' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function appointmentType()
    {
        return $this->belongsTo(AppointmentType::class);
    }
}

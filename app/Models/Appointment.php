<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Enums\EnumStatus;
use Carbon\Carbon;

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

    public function scopeSearch($query, $search)
    {
        return $query->where('name', 'like', '%' . $search . '%');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($appointment) {
            // Asegurar que tenga un tipo de cita válido
            if ($appointment->appointment_type_id && $appointment->start) {
                $type = AppointmentType::find($appointment->appointment_type_id);
                if ($type) {
                    // Convertir start a Carbon y sumar la duración
                    $appointment->end = Carbon::parse($appointment->start)
                        ->addMinutes($type->duration);
                }
            }
        });
    }
}

<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\EnumStatus;
use App\Models\Appointment;

class AppointmentType extends Model
{

    use HasFactory;
    //
    protected $fillable = [
        'name',
        'duration',
        'status',
    ];

     protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected function casts(): array
    {
        return [
            'status' => EnumStatus::class,
        ];
    }

     public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

}

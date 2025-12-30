<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\AppointmentType;
use App\Models\Appointment;
use App\Models\Schedules;
use App\Models\DaySchedules;
use App\Enums\EnumStatus;
use Carbon\Carbon;

class Reserva extends Component
{
    public $appointment_types;
    
    
    

    public function mount()
    {
        $this->appointment_types = AppointmentType::all();    
    }

    
    
    public function render()
    {
        return view('livewire.reserva');
    }
}


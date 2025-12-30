<?php

namespace App\Livewire;

use App\Models\Appointment;
use App\Models\User;
use Livewire\Component;

class CreateAppointment extends Component
{
    public $user_id;

    public function createAppointment()
    {
        Appointment::create([
            'user_id' => $this->user_id,
        ]);
    }

    public function render()
    {
        return view('livewire.create-appointment', [
            'users' => User::all(),
        ]);
    }
}

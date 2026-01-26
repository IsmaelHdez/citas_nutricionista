<?php

namespace App\Livewire;

use App\Models\Appointment;
use App\Models\AppointmentType;
use App\Models\Schedules;
use App\Models\DaySchedule;
use Livewire\Component;

class Citas extends Component
{
    public $appointment_types;
    public $schedules;
    public $dayschedules;
    public $appointments;

    public $dayschedulesStartV;
    public $dayschedulesEndV;
    public $dayschedulesStartI;
    public $dayschedulesEndI;

    public $schedulesStartV;
    public $schedulesEndV;
    public $schedulesStartI;
    public $schedulesEndI;

    public function mount()
    {
        $this->appointment_types = AppointmentType::all();
        $this->schedules = Schedules::all();

        $this->dayschedules = DaySchedule::whereIn(
            'schedule_id',
            $this->schedules->pluck('id')
        )->get();

        $verano = $this->dayschedules->where('schedule_id', 1)->first();
        $invierno = $this->dayschedules->where('schedule_id', 2)->first();

        $this->dayschedulesStartV = $verano ? date('H:i', strtotime($verano->start)) : null;
        $this->dayschedulesEndV   = $verano ? date('H:i', strtotime($verano->end)) : null;
        $this->dayschedulesStartI = $invierno ? date('H:i', strtotime($invierno->start)) : null;
        $this->dayschedulesEndI   = $invierno ? date('H:i', strtotime($invierno->end)) : null;

        $veranoSchedule = $this->schedules->where('id', 1)->first();
        $inviernoSchedule = $this->schedules->where('id', 2)->first();

        $this->schedulesStartV = $veranoSchedule ? $veranoSchedule->start : null;
        $this->schedulesEndV   = $veranoSchedule ? $veranoSchedule->end : null;
        $this->schedulesStartI = $inviernoSchedule ? $inviernoSchedule->start : null;
        $this->schedulesEndI   = $inviernoSchedule ? $inviernoSchedule->end : null;

        $this->appointments = Appointment::where('user_id', auth()->id())->where('status', '!=', 'cancelled')->get();
    }

    public function cancelAppointment($appointmentId)
    {
        $appointment = Appointment::find($appointmentId);

        if ($appointment && $appointment->user_id === auth()->id()) {
            $appointment->status = 'cancelled';
            $appointment->save();
        }

        $this->appointments = Appointment::where('user_id', auth()->id())->where('status', '!=', 'cancelled')->get();
    }

    public function render()
    {
        return view('livewire.citas');
    }
}

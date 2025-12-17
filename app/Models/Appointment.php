<?php

namespace App\Livewire\Appointments;

use Livewire\Component;
use App\Models\AppointmentType;
use App\Models\Appointment;
use App\Models\Schedules;
use App\Models\DaySchedules;
use App\Enums\EnumStatus;
use Carbon\Carbon;

class Reserve extends Component
{
    // ===== Formulario =====
    public string $date = '';
    public string $time = '';
    public int|string $appointment = '';

    // ===== Estado =====
    public bool $isSelectableDay = false;

    // ===== Datos =====
    public $appointment_types;
    public $schedules;
    public $dayschedules;

    public ?string $dayschedulesStartV = null;
    public ?string $dayschedulesEndV   = null;
    public ?string $dayschedulesStartI = null;
    public ?string $dayschedulesEndI   = null;

    public ?string $schedulesStartV = null;
    public ?string $schedulesEndV   = null;
    public ?string $schedulesStartI = null;
    public ?string $schedulesEndI   = null;

    /**
     * Carga inicial
     */
    public function mount()
    {
        $this->appointment_types = AppointmentType::all();
        $this->schedules = Schedules::all();

        $this->dayschedules = DaySchedules::whereIn(
            'schedule_id',
            $this->schedules->pluck('id')
        )->get();

        // Day schedules
        $verano = $this->dayschedules->where('schedule_id', 1)->first();
        $invierno = $this->dayschedules->where('schedule_id', 2)->first();

        $this->dayschedulesStartV = $verano
            ? date('H:i', strtotime($verano->start))
            : null;

        $this->dayschedulesEndV = $verano
            ? date('H:i', strtotime($verano->end))
            : null;

        $this->dayschedulesStartI = $invierno
            ? date('H:i', strtotime($invierno->start))
            : null;

        $this->dayschedulesEndI = $invierno
            ? date('H:i', strtotime($invierno->end))
            : null;

        // Schedules
        $veranoSchedule = $this->schedules->where('id', 1)->first();
        $inviernoSchedule = $this->schedules->where('id', 2)->first();

        $this->schedulesStartV = $veranoSchedule?->start;
        $this->schedulesEndV   = $veranoSchedule?->end;
        $this->schedulesStartI = $inviernoSchedule?->start;
        $this->schedulesEndI   = $inviernoSchedule?->end;
    }

    /**
     * Se ejecuta al cambiar la fecha
     */
    public function updatedDate($value)
    {
        if (! $value) {
            $this->isSelectableDay = false;
            return;
        }

        $date = Carbon::parse($value);

        // SOLO miramos la fecha seleccionada
        $this->isSelectableDay = ! $date->isWeekend();

        if (! $this->isSelectableDay) {
            $this->time = '';
        }
    }

    /**
     * Guardar cita
     */
    public function store()
    {
        $this->validate([
            'date' => [
                'required',
                'date',
                function ($attr, $value, $fail) {
                    if (Carbon::parse($value)->isWeekend()) {
                        $fail('No se permiten citas en fines de semana.');
                    }
                },
            ],
            'time' => 'required',
            'appointment' => 'required|exists:appointment_types,id',
        ]);

        $start = Carbon::parse("{$this->date} {$this->time}");

        Appointment::create([
            'user_id' => auth()->id(),
            'appointment_type_id' => $this->appointment,
            'status' => EnumStatus::Active,
            'start' => $start,
        ]);

        return redirect()
            ->route('reserve.index')
            ->with('success', 'Cita reservada con éxito.');
    }

    public function render()
    {
        return view('livewire.appointments.reserve');
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\DaySchedule;
use App\Models\Schedules;
use App\Models\Appointment;
use App\Models\AppointmentType;
use App\Enums\EnumStatus;

class Calendar extends Component
{
    public $fechaSeleccionada;
    public $horaSeleccionada = null;
    public $appointment_type;
    public $horas = [];
    public $appointment_types;

    protected $rules = [
        'fechaSeleccionada' => 'required|date',
        'horaSeleccionada' => 'required',
        'appointment_type' => 'required|exists:appointment_types,id',
    ];

    public function mount()
    {
        $this->appointment_types = AppointmentType::all();
    }

    public function updatedFechaSeleccionada($fecha)
    {
        $this->horaSeleccionada = null; // reset hora
        $this->horas = [];

        if (!$fecha) return;

        $diaSemana = Carbon::parse($fecha)->dayOfWeek;
        $mes = Carbon::parse($fecha)->month;

        $schedule = Schedules::whereRaw('MONTH(start) <= ?', [$mes])
                             ->whereRaw('MONTH(end) >= ?', [$mes])
                             ->first();

        $schedule_id = $schedule ? $schedule->id : 2; // default Invierno

        $horario = DaySchedule::where('schedule_id', $schedule_id)
                              ->where('weekday', $diaSemana)
                              ->first();

        if ($horario) {
            $inicio = Carbon::createFromTimeString($horario->start);
            $fin = Carbon::createFromTimeString($horario->end);

            $actual = $inicio->copy();
            while ($actual < $fin) {
                $this->horas[] = $actual->format('H:i');
                $actual->addMinutes(30);
            }
        }
    }

    public function submit()
    {
        $this->validate();

        if (!$this->fechaSeleccionada || !$this->horaSeleccionada || !$this->appointment_type) {
            session()->flash('message', 'Debe seleccionar tipo de cita, fecha y hora.');
            return;
        }

        try {
            $start = Carbon::parse($this->fechaSeleccionada . ' ' . $this->horaSeleccionada);
        } catch (\Exception $e) {
            session()->flash('message', 'La fecha u hora seleccionada es inválida.');
            return;
        }

        // Obtener duración de la cita
        $tipoCita = AppointmentType::find($this->appointment_type);
        if (!$tipoCita) {
            session()->flash('message', 'Tipo de cita no válido.');
            return;
        }

        $end = $start->copy()->addMinutes($tipoCita->duration);

        Appointment::create([
            'appointment_type_id' => $this->appointment_type,
            'user_id' => auth()->id(),
            'start' => $start,
            'end' => $end,
            'status' => EnumStatus::Active,
        ]);

        session()->flash('message', 'Cita reservada correctamente.');

        $this->reset(['fechaSeleccionada', 'horaSeleccionada', 'appointment_type', 'horas']);
    }

    public function render()
    {
        return view('livewire.calendar');
    }
}

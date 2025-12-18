<?php

namespace App\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\DaySchedule;
use App\Models\Schedules;

class Calendar extends Component
{
    public $fechaSeleccionada; // Fecha elegida por el usuario
    public $horaSeleccionada;  // Hora elegida por el usuario
    public $horas = [];        // Horas disponibles para la fecha

    public function updatedFechaSeleccionada($fecha)
    {
        // Determinar el día de la semana (0 = domingo, 6 = sábado)
        $diaSemana = Carbon::parse($fecha)->dayOfWeek;

        // Obtener el mes de la fecha seleccionada
        $mes = Carbon::parse($fecha)->month;

        if(Schedules::whereRaw('MONTH(start) <= ?', [$mes])->whereRaw('MONTH(end) >= ?', [$mes])->where('id', 1)->first()){
            $schedule_id = 1; // Verano
        }
        else{
            $schedule_id = 2; // Invierno
        }
        

        // Obtener horarios de DaySchedule según schedule_id y día
        $horario = DaySchedule::where('schedule_id', $schedule_id)
                    ->where('weekday', $diaSemana)
                    ->first();

        // Depuración opcional
        // dd($horario);

        $this->horas = [];

        if ($horario) {
            $inicio = Carbon::createFromTimeString($horario->start);
            $fin    = Carbon::createFromTimeString($horario->end);

            $actual = $inicio->copy();
            while ($actual <= $fin) {
                $this->horas[] = $actual->format('H:i');
                $actual->addMinutes(30);
            }
        }

        // Resetear hora seleccionada
        $this->horaSeleccionada = null;
    }

    public function render()
    {
        return view('livewire.calendar');
    }
}

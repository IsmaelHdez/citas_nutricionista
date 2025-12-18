<?php

namespace App\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\Day_schedule;

class Calendar extends Component
{
    public $inicio;
    public $fin;
    public $horas = [];

    public $weekdayS;
    public $startS;
    public $endS;

    public $weekdayW;
    public $startW;
    public $endW;

    public function mount()
    {
        // Cargar horario de verano
        $dateSummer = DaySchedules::select('weekday', 'start', 'end')
            ->where('schedule_id', 1)
            ->first();

        if ($dateSummer) {
            $this->weekdayS = $dateSummer->weekday;
            $this->startS = $dateSummer->start;
            $this->endS = $dateSummer->end;
        }

        // Cargar horario de invierno
        $dateWinter = DaySchedules::select('weekday', 'start', 'end')
            ->where('schedule_id', 2)
            ->first();

        if ($dateWinter) {
            $this->weekdayW = $dateWinter->weekday;
            $this->startW = $dateWinter->start;
            $this->endW = $dateWinter->end;
        }

        // Generar intervalos de hora para el horario de verano
        if ($this->startS !== null && $this->endS !== null) {
            $this->inicio = Carbon::createFromTimeString($this->startS);
            $this->fin = Carbon::createFromTimeString($this->endS);

            $actual = $this->inicio->copy();
            while ($actual <= $this->fin) {
                $this->horas[] = $actual->format('H:i');
                $actual->addMinutes(30);
            }
        }
    }

    public function render()
    {
        return view('livewire.calendar');
    }
}

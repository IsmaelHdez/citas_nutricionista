<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;

class Calendar extends Component
{
    public $currentMonth;
    public $currentYear;

    public function mount()
    {
        $this->currentMonth = Carbon::now()->month;
        $this->currentYear = Carbon::now()->year;
    }

    public function previousMonth()
    {
        $date = Carbon::createFromDate($this->currentYear, $this->currentMonth, 1)->subMonth();
        $this->currentMonth = $date->month;
        $this->currentYear = $date->year;
    }

    public function nextMonth()
    {
        $date = Carbon::createFromDate($this->currentYear, $this->currentMonth, 1)->addMonth();
        $this->currentMonth = $date->month;
        $this->currentYear = $date->year;
    }

    public function render()
    {
        $firstDayOfMonth = Carbon::createFromDate($this->currentYear, $this->currentMonth, 1);
        $daysInMonth = $firstDayOfMonth->daysInMonth;

        $calendar = [];

        $startDayOfWeek = $firstDayOfMonth->dayOfWeek; // 0 = Domingo, 1 = Lunes...
        $week = [];

        // Rellenar días vacíos antes del primer día
        for ($i = 0; $i < $startDayOfWeek; $i++) {
            $week[] = null;
        }

        for ($day = 1; $day <= $daysInMonth; $day++) {
            $week[] = $day;

            if (count($week) == 7) {
                $calendar[] = $week;
                $week = [];
            }
        }

        // Rellenar los días vacíos al final
        if (count($week) > 0) {
            while (count($week) < 7) {
                $week[] = null;
            }
            $calendar[] = $week;
        }

        return view('livewire.calendar', [
            'calendar' => $calendar,
            'monthName' => $firstDayOfMonth->format('F'),
        ]);
    }
}

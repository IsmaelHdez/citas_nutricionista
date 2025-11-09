<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AppointmentType;
use App\Enums\EnumStatus;
use App\Models\Appointment;
use App\Models\Schedules;
use App\Models\DaySchedules;
use Carbon\Carbon;

class AppointmentController extends Controller
{
    //
    public function index()
    {
        $appointment_types = AppointmentType::all();
        $schedules = Schedules::all();
        $dayschedules = DaySchedules::whereIn('schedule_id', $schedules->pluck('id'))->get();

        // Buscar el horario de verano e invierno dentro de la colección
        $verano = $dayschedules->where('schedule_id', 1)->first();
        $invierno = $dayschedules->where('schedule_id', 2)->first();

        // Comprobar si existen antes de acceder
        $dayschedulesStartV = $verano ? date('H:i', strtotime($verano->start)) : null;
        $dayschedulesEndV   = $verano ? date('H:i', strtotime($verano->end)) : null;

        $dayschedulesStartI = $invierno ? date('H:i', strtotime($invierno->start)) : null;
        $dayschedulesEndI   = $invierno ? date('H:i', strtotime($invierno->end)) : null;

        // Repetimos para la tabla schedules (verano e invierno)
        $veranoSchedule = $schedules->where('id', 1)->first();
        $inviernoSchedule = $schedules->where('id', 2)->first();

        $schedulesStartV = $veranoSchedule ? $veranoSchedule->start : null;
        $schedulesEndV   = $veranoSchedule ? $veranoSchedule->end : null;

        $schedulesStartI = $inviernoSchedule ? $inviernoSchedule->start : null;
        $schedulesEndI   = $inviernoSchedule ? $inviernoSchedule->end : null;
    
        return view('reserve', compact('appointment_types', 'dayschedules', 'schedules', 'dayschedulesStartV', 'dayschedulesEndV',
        'dayschedulesStartI', 'dayschedulesEndI', 'schedulesStartV', 'schedulesEndV', 'schedulesStartI', 'schedulesEndI'));
    }

    public function store(Request $request)
    {
        // Combinar fecha y hora en un solo valor 'start'
        $start = Carbon::parse($request->input('date') . ' ' . $request->input('time'));

        // Crear la cita
        $appointment = new Appointment();
        $appointment->user_id = auth()->id();
        $appointment->appointment_type_id = $request->input('appointment');
        $appointment->status = EnumStatus::Active;
        $appointment->start = $start; // 👈 este campo disparará el cálculo de 'end' en el modelo
        $appointment->save();

        // Redirigir con mensaje de éxito
        return redirect()
            ->route('reserve.index')
            ->with('success', 'Cita reservada con éxito.');
    }
}

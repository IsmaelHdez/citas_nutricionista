@extends('layouts.landing')

@section('title', 'Reserve')

@section('content')
    <h1>Reserve</h1>
    <p>Estas en la pagina de reserva.</p>

    <form action="{{ route('reserve.store') }}" method="POST">
        @csrf
        <div>
            <label for="appointment">Tipo de Cita:</label>
            <select id="appointment" name="appointment" required>
                @foreach ($appointment_types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }} - {{ $type->duration }} minutos</option>
                @endforeach
            </select>
        </div>

        @php
            use Carbon\Carbon;

            $today = Carbon::today();
            $weekday = $today->dayOfWeekIso; // 1=lunes ... 7=domingo

            // Determinar si estamos en horario de invierno o verano
            $isWinter = $today->between(
                Carbon::parse($schedulesStartI),
                Carbon::parse($schedulesEndI)
            );

            // Asignar el horario correcto
            $scheduleId = $isWinter ? 2 : 1;
            $scheduleLabel = $isWinter ? 'Horario de Invierno' : 'Horario de Verano';

            // Buscar el horario del día actual
            $todaySchedule = $dayschedules->where('schedule_id', $scheduleId)
                                        ->where('weekday', $weekday)
                                        ->first();

            $timeOptions = [];

            if ($todaySchedule) {
                $start = Carbon::parse($todaySchedule->start);
                $end = Carbon::parse($todaySchedule->end);

                // Generar lista de horas en saltos de 30 minutos (puedes cambiarlo)
                while ($start <= $end) {
                    $timeOptions[] = $start->format('H:i');
                    $start->addMinutes(30);
                }
            }
        @endphp

        <div>
            <label for="date">Fecha:</label>
            <input type="date" id="date" name="date" required value="{{ $today->format('Y-m-d') }}">
        </div>

        <div>
            <label for="time">Hora:</label>
            @if (empty($timeOptions))
                <p>No hay horarios disponibles para hoy ({{ $scheduleLabel }}).</p>
            @else
                <select id="time" name="time" required>
                    @foreach ($timeOptions as $time)
                        <option value="{{ $time }}">{{ $time }}</option>
                    @endforeach
                </select>
                <small>{{ $scheduleLabel }} — {{ $todaySchedule->start }} a {{ $todaySchedule->end }}</small>
            @endif
        </div>

        <button type="submit">Reservar Cita</button>
    </form>


    @if ($appointment_types->isEmpty())
        <p>No hay tipos de citas disponibles.</p>
    @else
    <h2>Lista de Tipos de Citas</h2>
    <ul>
        @foreach ($appointment_types as $type)
            <li>{{ $type->name }} - {{ $type->duration }} minutos - Estado: {{ $type->status }}</li>
        @endforeach
    </ul>
    @endif
@endsection
@extends('layouts.landing')

@section('title', 'Reserve')

@section('content')
    <h1>Reserve</h1>
    <p>Estas en la pagina de reserva.</p>

    <livewire:reserva />
    <livewire:calendar />


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
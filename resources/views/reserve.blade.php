@extends('layouts.landing')

@section('title', 'Reserve')

@section('content')
    <flux:heading size="lg" class="mb-6 text-center">Reserva</flux:heading>

    <flux:text class="mb-6 text-center">Estás en la página de inicio de reserva.</flux:text>

    
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
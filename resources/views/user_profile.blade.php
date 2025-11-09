@extends('layouts.landing')

@section('title', 'Perfil')

@section('content')
    <h1>Perfil de @auth {{ Auth::user()->name }} @endauth</h1>
    <p>Estas en la pagina de perfil.</p>

    @if ($appointments->isEmpty())
        <p>No hay tipos de citas disponibles.</p>
    @else
    <h2>Lista de Citas</h2>
    <ul>
        @foreach ($appointments as $appointment)
            <li>{{ $appointment->appointmentType->name }} - {{ $appointment->start }} hora - Estado: {{ $appointment->status }}</li>
        @endforeach
    </ul>
    @endif
@endsection
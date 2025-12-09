@extends('layouts.landing')

@section('title', 'Service')

@section('content')
    <h1>Service</h1>
    <p>Estas en la pagina service.</p>
    <h2>Servicios ofrecidos:</h2>
    <ul>
        <li>Consulta inicia</li>
        <li>Consulta seguimiento</li>
        <li>Nutrición deportiva</li>
        <li>Control de peso</li>
        <li>Nutrición clínica</li>
        <li>Nutrición infantil</li>
    </ul>

    <a href="{{route('reserve.index')}}">Reservar...</a>
@endsection
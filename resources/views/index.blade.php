@extends('layouts.landing')

@section('title', 'Home')

@section('content')
    <h1>Index</h1>
    <p>Estas en la pagina index.</p>

    <a href="{{ route('login.create') }}">Crear Usuario</a>
    
@endsection
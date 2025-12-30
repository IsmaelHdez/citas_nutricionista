@extends('layouts.landing')

@section('title', 'Login')

@section('content')
    <h1>Iniciar Sesión</h1>
    <p>Estas en la pagina de inicio de sesión.</p>

    <livewire:user-login />

    <h2>Lista de Usuarios</h2>
    @if ($users->isEmpty())
        <p>No hay usuarios disponibles.</p>
    @else
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }} - {{ $user->email }} - {{ $user->role }}
            <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="Eliminar Usuario">
            </form>
            </li>
        @endforeach
    </ul>
    @endif

@endsection
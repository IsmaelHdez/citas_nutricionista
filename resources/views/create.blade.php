@extends('layouts.landing')

@section('title', 'Create User')

@section('content')
    <h1>Crear Usuario</h1>
    <p>Estas en la pagina de crear usuario.</p>

    <livewire:user-registro />

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
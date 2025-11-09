@extends('layouts.landing')

@section('title', 'Create User')

@section('content')
    <h1>Crear Usuario</h1>
    <p>Estas en la pagina de crear usuario.</p>

    <form action="{{ route('login.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Crear Usuario</button>
    </form>

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
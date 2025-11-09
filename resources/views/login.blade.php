@extends('layouts.landing')

@section('title', 'Login')

@section('content')
    <h1>Iniciar Sesión</h1>
    <p>Estas en la pagina de inicio de sesión.</p>

    <form action="{{ route('login.post') }}" method="POST">
        @csrf
        <div>
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <label for="remember">
                <input type="checkbox" id="remember" name="remember">
                Recordarme
            </label>
        </div>
        <button type="submit">Iniciar Sesión</button>
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
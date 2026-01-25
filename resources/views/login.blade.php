@extends('layouts.landing')

@section('title', 'Login')

@section('content')
    <flux:heading size="lg" class="mb-6 text-center">Login</flux:heading>

    <flux:text class="mb-6 text-center">Estás en la página de inicio de sesión.</flux:text>


    <section class="flex-1">
        <div class="max-w-6xl mx-auto space-y-8">
            <livewire:user-login />
        </div>
    </section>
    

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
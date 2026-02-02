@extends('layouts.landing')

@section('title', 'Login')

@section('content')

<!-- Cabecera -->
<section class="space-y-4 p-2 border border-green-400 bg-green-200 rounded-lg shadow-md mb-8">
    <flux:heading size="lg" class="text-center font-bold">
        Login
    </flux:heading>

    <flux:text class="text-zinc-700 text-center">
        Estás en la página de inicio de sesión.
    </flux:text>
</section>

<!-- Formulario de login -->
<section class="max-w-6xl mx-auto mb-12 px-4 lg:px-0">
    <div class="space-y-8">
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
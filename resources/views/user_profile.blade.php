@extends('layouts.landing')

@section('title', 'Perfil')

@section('content')

<section class="max-w-6xl mx-auto space-y-8 px-4 lg:px-0">

    <!-- Cabecera del perfil -->
    <section class="space-y-4 p-2 border border-green-400 bg-green-200 rounded-lg shadow-md">
        <flux:heading size="lg" class="text-center font-bold">
            Perfil de {{ Auth::user()->name }}
        </flux:heading>

        <flux:text class="text-zinc-700 text-center">
            Bienvenido a tu perfil de usuario. Aquí puedes ver y gestionar tus citas programadas.
        </flux:text>
    </section>

    <!-- Listado de citas -->
    <section class="mt-8">
        <livewire:citas />
    </section>
</section>

@endsection

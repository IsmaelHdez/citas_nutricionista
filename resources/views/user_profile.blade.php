@extends('layouts.landing')

@section('title', 'Perfil')

@section('content')

<section class="max-w-4xl mx-auto space-y-6">
    <flux:heading size="lg" class="text-center">
        <strong>Perfil de {{ Auth::user()->name }}</strong>
    </flux:heading>

    <flux:text class="text-zinc-600" class="text-center">
        Bienvenido a tu perfil de usuario. Aquí puedes ver y gestionar tus citas programadas.
    </flux:text>

    <section class="mt-8">
        <livewire:citas />
    </section>
</section>

    
@endsection
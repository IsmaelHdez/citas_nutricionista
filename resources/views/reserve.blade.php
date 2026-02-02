@extends('layouts.landing')

@section('title', 'Reserve')

@section('content')

<section class="space-y-4 p-6 border border-green-400 bg-green-200 rounded-lg shadow-md mb-8">
    <flux:heading size="lg" class="text-center font-bold">
        Reserva
    </flux:heading>

    <flux:text class="text-zinc-700 text-center">
        Estás en la página de inicio de reserva.
    </flux:text>
</section>

<div class="flex flex-col lg:flex-row gap-8 mb-20 items-center">
    
    <section class="flex justify-center flex-1">
        <img
            src="https://www.ui1.es/sites/default/files/blog/images/dia_mundial_diabetes_retocada.jpg"
            alt="Imagen informativa"
            class="max-w-full h-auto rounded-xl shadow-lg
                   [mask-image:radial-gradient(ellipse_at_center,black_60%,transparent_100%)]
                   [-webkit-mask-image:radial-gradient(ellipse_at_center,black_60%,transparent_100%)]"
        >
    </section>

    <section class="flex-1">
        <div class="max-w-6xl mx-auto">
            <livewire:calendar />
        </div>
    </section>
</div>

@endsection

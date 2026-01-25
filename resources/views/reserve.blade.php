@extends('layouts.landing')

@section('title', 'Reserve')

@section('content')
    <flux:heading size="lg" class="mb-6 text-center">Reserva</flux:heading>

    <flux:text class="mb-6 text-center">Estás en la página de inicio de reserva.</flux:text>

    <div class="flex flex-col lg:flex-row gap-8 mb-20">
 
        <section class="flex items-center justify-center">
            <img
                src="https://www.ui1.es/sites/default/files/blog/images/dia_mundial_diabetes_retocada.jpg"
                alt="Imagen informativa"
                class="
                max-w-full h-auto
                [mask-image:radial-gradient(ellipse_at_center,black_60%,transparent_100%)]
                [-webkit-mask-image:radial-gradient(ellipse_at_center,black_60%,transparent_100%)]
                "
            >
        </section>

        <section class="flex-1">
            <div class="max-w-6xl mx-auto space-y-8">
            <livewire:calendar />
            </div>
        </section>
    </div>



    @if ($appointment_types->isEmpty())
        <p>No hay tipos de citas disponibles.</p>
    @else
    <h2>Lista de Tipos de Citas</h2>
    <ul>
        @foreach ($appointment_types as $type)
            <li>{{ $type->name }} - {{ $type->duration }} minutos - Estado: {{ $type->status }}</li>
        @endforeach
    </ul>
    @endif
@endsection
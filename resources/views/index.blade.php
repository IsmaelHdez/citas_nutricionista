@extends('layouts.landing')

@section('title', 'Home')

@section('content')

    {{-- Hero / Slider --}}
    <section class="mb-20">
        <livewire:image-index />
    </section>

    {{-- Marcas / Confianza --}}
    <section class="mb-20">
        <div class="max-w-6xl mx-auto text-center space-y-4">
            <flux:heading size="lg">
                Confían en nosotros
            </flux:heading>

            <flux:text class="text-zinc-600">
                Colaboramos con marcas y profesionales comprometidos con la salud y el bienestar.
            </flux:text>
        </div>

        <div class="mt-8">
            <livewire:brands />
        </div>
    </section>

    {{-- Servicios --}}
    <section class="mb-20">
        <div class="max-w-6xl mx-auto space-y-8">
            <livewire:service-index />
        </div>
    </section>

    {{-- Experiencias --}}
    <section class="mb-24 bg-zinc-50 py-16">
        <div class="max-w-6xl mx-auto">
            <livewire:experience />
        </div>
    </section>

@endsection

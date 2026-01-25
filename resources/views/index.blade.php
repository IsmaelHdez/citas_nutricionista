@extends('layouts.landing')

@section('title', 'Home')

@section('content')

    <section class="mb-20">
        <livewire:image-index />
    </section>


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

    <section class="mb-20">
        <div class="max-w-6xl mx-auto space-y-8">
            <livewire:service-index />
        </div>
    </section>

    <section class="mb-20 flex justify-center">
        <div class="max-w-6xl flex justify-center">
            <img
            src="https://cdn.euroinnova.edu.es/img/subidasEditor/copia%20de%20disen%CC%83o%20sin%20ti%CC%81tulo%20(54)-1621262642.webp">
        </div>
    </section>

    <section class="mb-24 bg-zinc-50 py-16">
        <div class="max-w-6xl mx-auto">
            <livewire:experience />
        </div>
    </section>

@endsection

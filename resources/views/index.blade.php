@extends('layouts.landing')

@section('title', 'Home')

@section('content')
    <livewire:image-index />
    <livewire:brands />
    <livewire:service-index />
    <livewire:experience />
    <!-- Ejemplo: Recuadro rojo con texto azul -->
        <div class="bg-red-500 p-4 rounded-md mt-6">
            <p class="text-blue-500 font-semibold">
                Este es un texto azul dentro de un recuadro rojo.
            </p>
        </div>
@endsection
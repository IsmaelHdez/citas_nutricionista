@extends('layouts.landing')

@section('title', 'Quiénes somos')

@section('content')

<!-- Cabecera -->
<section class="space-y-4 p-2 border border-green-400 bg-green-200 rounded-lg shadow-md mb-8">
    <flux:heading size="lg" class="text-center font-bold">
        Quiénes somos...
    </flux:heading>

    <flux:text class="text-zinc-700 text-center">
        Nutrición basada en evidencia, diseñada para personas reales.
    </flux:text>
</section>

<!-- Introducción -->
<section class="max-w-6xl mx-auto space-y-4 mb-8 text-gray-700">
    <flux:text>
        Somos un equipo de <strong>nutricionistas titulados</strong> con experiencia en el ámbito
        clínico, deportivo y educativo. Cada plan nutricional que elaboramos está respaldado
        por evidencia científica y adaptado a tu estilo de vida, necesidades y objetivos.
    </flux:text>

    <flux:text>
        Creemos en una nutrición sostenible, sin extremos ni soluciones rápidas. Nuestro
        enfoque busca que aprendas a tomar decisiones saludables que puedas mantener
        a lo largo del tiempo.
    </flux:text>
</section>

<!-- Nuestro enfoque -->
<section class="max-w-6xl mx-auto space-y-6 mb-8">
    <flux:heading size="lg" class="text-gray-800">
        Nuestro enfoque
    </flux:heading>

    <ul class="space-y-4">
        <li class="p-4 border border-gray-200 rounded-lg bg-white shadow-sm hover:shadow-md transition">
            <flux:text>
                <strong>Atención personalizada:</strong> evaluación integral de tu estado nutricional,
                hábitos, antecedentes y objetivos.
            </flux:text>
        </li>

        <li class="p-4 border border-gray-200 rounded-lg bg-white shadow-sm hover:shadow-md transition">
            <flux:text>
                <strong>Educación alimentaria:</strong> te enseñamos a comprender lo que comes y
                a tomar mejores decisiones de forma autónoma.
            </flux:text>
        </li>

        <li class="p-4 border border-gray-200 rounded-lg bg-white shadow-sm hover:shadow-md transition">
            <flux:text>
                <strong>Resultados reales:</strong> metas claras, alcanzables y sostenibles,
                enfocadas en salud y bienestar.
            </flux:text>
        </li>

        <li class="p-4 border border-gray-200 rounded-lg bg-white shadow-sm hover:shadow-md transition">
            <flux:text>
                <strong>Seguimiento continuo:</strong> ajustes periódicos según tu progreso
                y acompañamiento constante.
            </flux:text>
        </li>
    </ul>
</section>

<!-- Nuestros valores -->
<section class="max-w-6xl mx-auto space-y-6 mb-8">
    <flux:heading size="lg" class="text-gray-800">
        Nuestros valores
    </flux:heading>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="p-4 border border-gray-200 rounded-lg bg-white shadow-sm hover:shadow-md transition space-y-2">
            <flux:heading size="sm" class="text-gray-800 font-semibold">Compromiso</flux:heading>
            <flux:text class="text-gray-700">
                Nos involucramos activamente en cada proceso, priorizando siempre tu bienestar.
            </flux:text>
        </div>

        <div class="p-4 border border-gray-200 rounded-lg bg-white shadow-sm hover:shadow-md transition space-y-2">
            <flux:heading size="sm" class="text-gray-800 font-semibold">Transparencia</flux:heading>
            <flux:text class="text-gray-700">
                Todas nuestras recomendaciones se basan en evidencia científica actualizada.
            </flux:text>
        </div>

        <div class="p-4 border border-gray-200 rounded-lg bg-white shadow-sm hover:shadow-md transition space-y-2">
            <flux:heading size="sm" class="text-gray-800 font-semibold">Empatía</flux:heading>
            <flux:text class="text-gray-700">
                Te acompañamos con respeto, cercanía y sin juicios durante todo el proceso.
            </flux:text>
        </div>
    </div>
</section>

<!-- Imagen final -->
<section class="mb-20 flex justify-center">
    <div class="max-w-6xl flex justify-center">
        <img
            src="https://nutricionnervion.es/wp-content/uploads/2024/12/nutricion-nervion-servicio-nutricion-clinica.jpg"
            alt="Nutrición Clínica"
            class="rounded-xl shadow-lg max-w-full h-auto"
        >
    </div>
</section>

@endsection

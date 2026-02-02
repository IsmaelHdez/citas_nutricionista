@extends('layouts.landing')

@section('title', 'Service')

@section('content')


<section class="space-y-4 p-2 border border-green-400 bg-green-200 rounded-lg shadow-md mb-8">
    <flux:heading size="lg" class="text-center font-bold">
        Servicios en los que te podemos ayudar
    </flux:heading>

    <flux:text class="text-zinc-700 text-center">
        Ofrecemos acompañamiento nutricional personalizado para distintas etapas y objetivos,
        siempre basado en evidencia científica.
    </flux:text>
</section>

<section class="max-w-6xl mx-auto space-y-6 mb-12">
    <ul class="flex flex-col gap-4">
        <!-- Nutrición deportiva -->
        <li class="w-full p-4 border border-gray-200 rounded-lg bg-white shadow-sm hover:shadow-md transition flex flex-col sm:flex-row items-center gap-4">
            <div class="flex-shrink-0">
                <img 
                    src="https://img.freepik.com/vector-premium/diseno-logotipo-fitness_1145966-1824.jpg?semt=ais_hybrid&w=740&q=80" 
                    alt="Logo de fitness con mancuernas" 
                    class="w-20 h-20 object-cover rounded"
                >
            </div>
            <flux:text class="text-gray-700">
                <strong>Nutrición deportiva</strong><br>
                Planes enfocados en mejorar el rendimiento, la recuperación y la composición corporal.
            </flux:text>
        </li>

        
        <li class="w-full p-4 border border-gray-200 rounded-lg bg-white shadow-sm hover:shadow-md transition flex flex-col sm:flex-row items-center gap-4">
            <div class="flex-shrink-0">
                <img 
                    src="https://thumbs.dreamstime.com/b/logotipo-del-programa-de-dieta-por-concepto-p%C3%A9rdida-peso-logo-icono-aislado-en-forma-grasa-silueta-mujer-abstracta-y-figura-con-186221198.jpg" 
                    alt="Logo de control de peso" 
                    class="w-20 h-20 object-cover rounded"
                >
            </div>
            <flux:text class="text-gray-700">
                <strong>Control de peso</strong><br>
                Estrategias sostenibles para pérdida, aumento o mantenimiento de peso saludable.
            </flux:text>
        </li>

        
        <li class="w-full p-4 border border-gray-200 rounded-lg bg-white shadow-sm hover:shadow-md transition flex flex-col sm:flex-row items-center gap-4">
            <div class="flex-shrink-0">
                <img 
                    src="https://img.freepik.com/vector-premium/concepto-diseno-logotipo-super-nutricion_761413-6186.jpg?semt=ais_hybrid&w=740&q=80" 
                    alt="Logo de nutrición clínica" 
                    class="w-20 h-20 object-cover rounded"
                >
            </div>
            <flux:text class="text-gray-700">
                <strong>Nutrición clínica</strong><br>
                Abordaje nutricional para patologías y condiciones específicas de salud.
            </flux:text>
        </li>

        
        <li class="w-full p-4 border border-gray-200 rounded-lg bg-white shadow-sm hover:shadow-md transition flex flex-col sm:flex-row items-center gap-4">
            <div class="flex-shrink-0">
                <img 
                    src="https://img.freepik.com/vector-premium/diseno-logotipo-healthy-partnership-yoga-que-simboliza-bienestar-unidad_1344225-8172.jpg" 
                    alt="Logo de nutrición infantil" 
                    class="w-20 h-20 object-cover rounded"
                >
            </div>
            <flux:text class="text-gray-700">
                <strong>Nutrición infantil</strong><br>
                Acompañamiento nutricional en etapas clave del crecimiento y desarrollo.
            </flux:text>
        </li>
    </ul>
</section>


<section class="flex justify-center mb-20">
    <flux:button href="{{ route('reserve.index') }}" variant="primary" class="px-6 py-3 text-lg">
        Reserva una cita ahora
    </flux:button>
</section>

@endsection

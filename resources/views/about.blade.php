@extends('layouts.landing')

@section('title', 'Quiénes somos')

@section('content')

    <div class="max-w-4xl mx-auto space-y-12">

        <div class="text-center space-y-4">
            <flux:heading size="xl">
                Quiénes somos
            </flux:heading>

            <flux:text class="text-zinc-600">
                Nutrición basada en evidencia, diseñada para personas reales.
            </flux:text>
        </div>

        <section class="space-y-4">
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

        <section class="space-y-6">
            <flux:heading size="lg">
                Nuestro enfoque
            </flux:heading>

            <ul class="space-y-3">
                <li>
                    <flux:text>
                        <strong>Atención personalizada:</strong> evaluación integral de tu estado nutricional,
                        hábitos, antecedentes y objetivos.
                    </flux:text>
                </li>

                <li>
                    <flux:text>
                        <strong>Educación alimentaria:</strong> te enseñamos a comprender lo que comes y
                        a tomar mejores decisiones de forma autónoma.
                    </flux:text>
                </li>

                <li>
                    <flux:text>
                        <strong>Resultados reales:</strong> metas claras, alcanzables y sostenibles,
                        enfocadas en salud y bienestar.
                    </flux:text>
                </li>

                <li>
                    <flux:text>
                        <strong>Seguimiento continuo:</strong> ajustes periódicos según tu progreso
                        y acompañamiento constante.
                    </flux:text>
                </li>
            </ul>
        </section>

        <section class="space-y-6">
            <flux:heading size="lg">
                Nuestros valores
            </flux:heading>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="space-y-2">
                    <flux:heading size="sm">Compromiso</flux:heading>
                    <flux:text>
                        Nos involucramos activamente en cada proceso, priorizando siempre tu bienestar.
                    </flux:text>
                </div>

                <div class="space-y-2">
                    <flux:heading size="sm">Transparencia</flux:heading>
                    <flux:text>
                        Todas nuestras recomendaciones se basan en evidencia científica actualizada.
                    </flux:text>
                </div>

                <div class="space-y-2">
                    <flux:heading size="sm">Empatía</flux:heading>
                    <flux:text>
                        Te acompañamos con respeto, cercanía y sin juicios durante todo el proceso.
                    </flux:text>
                </div>
            </div>
        </section>

    </div>

@endsection

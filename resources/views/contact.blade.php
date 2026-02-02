@extends('layouts.landing')

@section('title', 'Contact')

@section('content')


<section class="space-y-4 p-2 border border-green-400 bg-green-200 rounded-lg shadow-md mb-8">
    <flux:heading size="lg" class="text-center font-bold">
        Contacta con nosotros
    </flux:heading>

    <flux:text class="text-zinc-700 text-center">
        Nuestro equipo está aquí para ayudarte. Si tienes alguna pregunta o necesitas más información,
        no dudes en ponerte en contacto con nosotros a través del formulario o por teléfono.
    </flux:text>
</section>


<section class="flex flex-col lg:flex-row gap-8 mb-12 px-4 lg:px-0">
    
   
    <section class="flex-1 w-full">
        <div class="w-full h-64 md:h-96 rounded-lg overflow-hidden shadow-md border border-gray-200">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1228.123!2d-16.26051262244217!3d28.459862080226387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1695555555555!5m2!1ses!2ses" 
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>

    
    <section class="flex-1 w-full">
        <form action="" method="POST" class="space-y-4 p-4 border border-gray-200 rounded-lg bg-white shadow-sm">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-zinc-700">Nombre</label>
                <input type="text" name="name" id="name" required class="mt-1 block w-full border border-zinc-300 rounded-md shadow-sm p-2">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-zinc-700">Correo electrónico</label>
                <input type="email" name="email" id="email" required class="mt-1 block w-full border border-zinc-300 rounded-md shadow-sm p-2">
            </div>

            <div>
                <label for="message" class="block text-sm font-medium text-zinc-700">Mensaje</label>
                <textarea name="message" id="message" rows="4" required class="mt-1 block w-full border border-zinc-300 rounded-md shadow-sm p-2"></textarea>
            </div>

            <div>
                <flux:button type="submit" variant="primary" class="block mx-auto w-full md:w-auto px-6 py-3 text-lg">
                    Enviar mensaje
                </flux:button>
            </div>
        </form>
    </section>
</section>


<section class="max-w-6xl mx-auto text-center text-zinc-600 space-y-4 mb-20">
    <flux:heading size="md" class="mb-2 text-gray-800">
        Información de contacto adicional
    </flux:heading>

    <flux:text class="text-gray-700">
        Teléfono: +34 922 80 64 82<br>
        Email: info.cita@nutricion.com<br>
        Dirección: C. Juan Sebastián Elcano, 4, 38005 Santa Cruz de Tenerife
    </flux:text>
</section>

@endsection

<section class="max-w-6xl mx-auto space-y-6 mb-8 p-6 bg-gray-50 rounded-lg border border-gray-200">

    
    <div class="space-y-4 p-4 border border-green-200 bg-green-100 rounded-lg">
        <flux:heading size="md" class="text-center text-green-900 font-semibold">
            Tus Citas
        </flux:heading>

        <flux:text class="text-gray-700 text-center">
            A continuación se muestra una lista de tus citas programadas.
        </flux:text>
    </div>

    
    <section>
        @if ($appointments->isEmpty())
            <flux:text class="text-center text-gray-600 py-8">
                No tienes citas programadas.
            </flux:text>
        @else
            <ul class="flex flex-col items-center">
                @foreach ($appointments as $appointment)
                    <li class="w-full mb-4 flex flex-col lg:flex-row gap-6 items-center">
                        <!-- Tarjeta de info -->
                        <div class="w-full flex-1 p-4 border border-gray-200 rounded-lg bg-white shadow-sm text-gray-700">
                            <h3 class="font-semibold text-gray-800 mb-1">
                                {{ $appointment->appointmentType?->name ?? 'Sin tipo' }}
                            </h3>
                            <p class="text-gray-600">
                                <span class="font-medium">Fecha:</span> {{ $appointment->start->format('d/m/Y H:i') }}
                            </p>
                            <p class="text-gray-600">
                                <span class="font-medium">Estado:</span> {{ $appointment->status }}
                            </p>
                        </div>

                        <!-- Botón -->
                        <flux:button
                            variant="danger"
                            wire:click="cancelAppointment({{ $appointment->id }})"
                            class="w-full lg:w-auto"
                        >
                            Cancelar Cita
                        </flux:button>
                    </li>
                @endforeach
            </ul>
        @endif
    </section>
</section>

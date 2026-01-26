<section>
    <flux:heading size="md" class="text-center">
        Tus Citas
    </flux:heading>
    <flux:text class="text-zinc-600 text-center">
        A continuación se muestra una lista de tus citas programadas.
    </flux:text>

    <section class="mt-4">
        @if ($appointments->isEmpty())
            <flux:text>No tienes citas programadas.</flux:text>
        @else
            <ul>
                @foreach ($appointments as $appointment)
                    <li>
                        <div class="p-4 border rounded-lg mb-2">
                            {{ $appointment->appointmentType?->name ?? 'Sin tipo' }} -
                            {{ \Carbon\Carbon::parse($appointment->start)->format('d/m/Y H:i') }} -
                            Estado: {{ $appointment->status }}
                        </div>
                        <flux:button variant="danger" wire:click="cancelAppointment({{ $appointment->id }})">
                            Cancelar Cita
                        </flux:button>
                    </li>
                @endforeach
            </ul>
        @endif
    </section>
</section>

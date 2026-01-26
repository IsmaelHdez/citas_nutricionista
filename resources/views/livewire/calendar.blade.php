<div>
    {{-- 1. Mensaje de éxito --}}
    @if (session()->has('message'))
        <div class="border border-solid border-green-300 bg-green-50 text-green-700 p-4 font-normal text-sm rounded-lg mb-4">
            {{ session('message') }}
        </div>
    @endif

    <div class="border border-zinc-200 dark:border-zinc-700 rounded-lg p-4 max-w-lg mx-auto">
        <form wire:submit.prevent="submit">
            <div class="space-y-4">
                
                
                <flux:field>
                    <flux:label for="appointment_type">Tipo de cita:</flux:label>
                    <flux:select name="appointment_type" id="appointment_type" wire:model="appointment_type" required>
                        <option value="">-- Selecciona un tipo de cita --</option>
                        @foreach($appointment_types as $type)
                            <option value="{{ $type->id }}">
                                {{ $type->name }} - {{ $type->duration }} minutos
                            </option>
                        @endforeach
                    </flux:select>
                </flux:field>

                
                <flux:field>
                    <flux:label for="fecha">Selecciona una fecha:</flux:label>
                    <flux:input
                        type="date"
                        id="fecha"
                        name="fecha"
                        wire:model.lazy="fechaSeleccionada"
                        min="{{ \Carbon\Carbon::today()->format('Y-m-d') }}"
                        required />
                </flux:field>

                <flux:field>
                    <flux:label for="hora">Selecciona una hora:</flux:label>
                    
                    <flux:select 
                        id="hora" 
                        name="hora" 
                        wire:model="horaSeleccionada" 
                        wire:key="select-hora-{{ $fechaSeleccionada }}-{{ count($horas) }}"
                        :disabled="empty($horas)"
                        placeholder="-- Selecciona una hora --"
                    >
                        <option value="">-- Selecciona una hora --</option>
                        @foreach($horas as $hora)
                            <option value="{{ $hora }}">{{ $hora }}</option>
                        @endforeach
                    </flux:select>
                </flux:field>

                
                <div class="flex justify-end">
                    <flux:button type="submit" variant="primary">Reservar cita</flux:button>
                </div>

            </div>
        </form>
    </div>
</div>
<div>
    <div>
        <label for="appointment_type">Tipo de cita:</label>
        <select name="appointment_type" id="appointment_type" wire:model="appointment_type" required>
            <option value="">-- Selecciona un tipo de cita --</option>
            @foreach($appointment_types as $type)
                <option value="{{ $type->id }}">
                    {{ $type->name }} - {{ $type->duration }} minutos
                </option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="fecha">Selecciona una fecha:</label>
        <input
            type="date"
            id="fecha"
            name="fecha"
            wire:model.lazy="fechaSeleccionada"
            min="{{ \Carbon\Carbon::today()->format('Y-m-d') }}"
            required
        >

        @if($fechaSeleccionada)
            <p>Has seleccionado: {{ $fechaSeleccionada }}</p>
        @endif
    </div>

    <div>
        <label for="hora">Selecciona una hora:</label>
        <select id="hora" name="hora" wire:model="horaSeleccionada" {{ empty($horas) ? 'disabled' : '' }}>
            <option value="">-- Selecciona una hora --</option>
            @foreach($horas as $hora)
                <option value="{{ $hora }}">{{ $hora }}</option>
            @endforeach
        </select>
    </div>

    <button type="button" wire:click="submit">Reservar Cita</button>

    @if (session()->has('message'))
        <p>{{ session('message') }}</p>
    @endif
</div>

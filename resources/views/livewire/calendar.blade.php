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

    <div>
        <label for="hora">Selecciona una hora:</label>
        <select id="hora" name="hora" wire:model="horaSeleccionada" {{ empty($horas) ? 'disabled' : '' }}>
            <option value="">-- Selecciona una hora --</option>
            @foreach($horas as $hora)
                <option value="{{ $hora }}">{{ $hora }}</option>
            @endforeach
        </select>
    </div>
</div>

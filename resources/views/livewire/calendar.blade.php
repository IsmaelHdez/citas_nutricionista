<div>
    <label for="fecha">Selecciona una fecha:</label>
    <input
            type="date"
            id="fecha"
            name="fecha"
            min="{{ \Carbon\Carbon::today()->format('Y-m-d') }}"
            required
        >

    <div>
        <label for="hora">Selecciona una hora:</label>
        <select id="hora" name="hora" wire:model="horaSeleccionada">
            @foreach($horas as $hora)
                <option value="{{ $hora }}">{{ $hora }}</option>
            @endforeach
        </select>
    </div>

</div>

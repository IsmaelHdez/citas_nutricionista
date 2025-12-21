<div>
    <select name="appointment_type" id="appointment_type">
        @foreach($appointment_types as $type)
            <option value="{{ $type->id }}">{{ $type->name }} - {{ $type->duration }} minutos</option>
        @endforeach
    </select>
</div>
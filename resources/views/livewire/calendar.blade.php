<div class="calendar p-4 border rounded">
    <div class="flex justify-between mb-2">
        <button wire:click="previousMonth">Anterior</button>
        <h2 class="font-bold">{{ $monthName }} {{ $currentYear }}</h2>
        <button wire:click="nextMonth">Siguiente</button>
    </div>

    <table class="w-full text-center border-collapse">
        <thead>
            <tr>
                <th>Dom</th>
                <th>Lun</th>
                <th>Mar</th>
                <th>Mié</th>
                <th>Jue</th>
                <th>Vie</th>
                <th>Sáb</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($calendar as $week)
                <tr>
                    @foreach ($week as $day)
                        <td class="border h-12 w-12 align-top">
                            @if ($day)
                                <div>{{ $day }}</div>
                            @endif
                        </td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

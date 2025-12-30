<div>
    <flux:heading size="lg" class="mb-6">Crear Cita</flux:heading>

    <div class="border border-zinc-200 dark:border-zinc-700 rounded-lg p-4">
        <flux:field>
            <flux:label>Usuario</flux:label>
            <flux:select wire:model="user_id" placeholder="Choose user...">
                @foreach ($users as $user)
                    <flux:select.option value="{{ $user->id }}">{{ $user->name }}</flux:select.option>
                @endforeach
            </flux:select>
            <flux:error name="username" />
        </flux:field>

        <flux:separator class="my-4" />
        <flux:button variant="primary">Crear</flux:button>

        <flux:button variant="primary">Primary</flux:button>
    </div>
</div>

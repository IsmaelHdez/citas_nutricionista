<div>
    @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <form wire:submit.prevent="submit">
        <div>
            <label>Nombre:</label>
            <input type="text" wire:model="name">
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label>Email:</label>
            <input type="email" wire:model="email">
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label>Contraseña:</label>
            <input type="password" wire:model="password">
            @error('password') <span class="error">{{ $message }}</span> @enderror
        </div>

        <button type="submit">Registrar</button>
    </form>
</div>

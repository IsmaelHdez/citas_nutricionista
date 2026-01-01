<div>
    @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <form wire:submit.prevent="submit">

        <div>
            <label>Email:</label>
            <input type="email" wire:model="email" class="border p-2">
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label>Contraseña:</label>
            <input type="password" wire:model="password" class="border p-2">
            @error('password') <span class="error">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="border p-2 text-black px-4 py-2 rounded">Iniciar Sesión</button>
    </form>
</div>
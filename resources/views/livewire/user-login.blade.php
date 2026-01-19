<div>
    @if (session()->has('message'))
        <div class="border border-solid border-green-300 bg-green-50 text-green-700 p-4 font-normal text-sm rounded-lg mb-4">{{ session('message') }}</div>
    @endif

    <div class="border border-zinc-200 dark:border-zinc-700 rounded-lg p-4 max-w-lg mx-auto">    
        
        <form wire:submit.prevent="submit">
            
            <div class="space-y-4">
                <flux:field>
                    <flux:label>Email</flux:label>
                    <flux:input type="email" wire:model="email" />
                    <flux:error name="email" />
                </flux:field>
                <flux:field>
                    <flux:label>Contraseña</flux:label>
                    <flux:input type="password" wire:model="password" />
                    <flux:error name="password" />
                </flux:field>
                <div class="flex justify-end">
                    <flux:button type="submit" variant="primary">Iniciar sesión</flux:button>
                </div>
            </div>
        </form>
    </div>
</div>
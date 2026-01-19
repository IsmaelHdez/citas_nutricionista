<header class="flex justify-center border-b border-zinc-200 dark:border-zinc-700 mb-6">
    <flux:navbar>
        <flux:navbar.item href="{{ route('user.index') }}">Home</flux:navbar.item>
        <flux:navbar.item href="{{ route('about') }}">Sobre nosotros</flux:navbar.item>
        <flux:navbar.item href="{{ route('reserve.index') }}">Reservas</flux:navbar.item>
        <flux:navbar.item href="{{ route('service') }}">Servicios</flux:navbar.item>
        <flux:navbar.item href="{{ route('contact') }}">Contacto</flux:navbar.item>
        <flux:dropdown>
        <flux:navbar.item icon:trailing="chevron-down">Perfil</flux:navbar.item>
        <flux:navmenu>
            @guest
                <flux:navmenu.item href="{{ route('login') }}">Iniciar Sesión</flux:navmenu.item>
                <flux:navmenu.item href="{{ route('login.create') }}">Registrarse</flux:navmenu.item>
            @else
                <flux:navmenu.item href="{{ route('user_profile') }}">Perfil</flux:navmenu.item>
                <flux:navmenu.item wire:click="logout" icon="arrow-right-start-on-rectangle">Cerrar Sesión</flux:navmenu.item>
            @endguest
        </flux:navmenu>
    </flux:dropdown>
    </flux:navbar>
</header>

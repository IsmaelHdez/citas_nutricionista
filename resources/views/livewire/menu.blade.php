<header>
    <nav >
        <ul>
            <li><a href="{{ route('user.index') }}">Home</a></li>
            <li><a href="{{ route('about') }}">Sobre nosotros</a></li>
            <li><a href="{{ route('reserve.index') }}">Reservas</a></li>
            <li><a href="{{ route('service') }}">Servicios</a></li>
            <li><a href="{{ route('contact') }}">Contacto</a></li>
        </ul>

        <ul>
            @guest
                <li><a href="{{ route('login') }}" class="border p-2 text-black px-4 py-2 rounded">Iniciar Sesión</a></li>
                <li><a href="{{ route('login.create') }}" class="border p-2 text-black px-4 py-2 rounded">Registrarse</a></li>
            @else
                <li>
                    <a href="{{ route('user_profile') }}">
                        {{ auth()->user()->name }}
                    </a>
                </li>
                <li>
                    <button type="button" wire:click="logout" class="border p-2 text-black px-4 py-2 rounded">
                        Cerrar Sesión
                    </button>
                </li>
            @endguest
        </ul>
    </nav>
</header>

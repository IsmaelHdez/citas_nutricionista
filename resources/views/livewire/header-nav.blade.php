<header>
    <nav>
        <ul>
            <li><a href="{{ route('user.index') }}">Home</a></li>
            <li><a href="{{ route('about') }}">Sobre nosotros</a></li>
            <li><a href="{{ route('reserve.index') }}">Reservas</a></li>
            <li><a href="{{ route('service') }}">Servicios</a></li>
            <li><a href="{{ route('contact') }}">Contacto</a></li>
        </ul>

        <ul>
            @guest
                <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
                <li><a href="{{ route('login.create') }}">Registrarse</a></li>
            @else
                <li>
                    <a href="{{ route('user_profile') }}">{{ Auth::user()->name }}</a>

                    <button wire:click="logout" type="button">
                        Cerrar Sesión
                    </button>
                </li>
            @endguest
        </ul>
    </nav>
</header>

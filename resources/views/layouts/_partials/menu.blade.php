<header>
    <nav>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="{{ route('about') }}">Sobre nosotroaas</a></li>
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
                    <form method="POST" action="{{ route('login.logout') }}">
                        @csrf
                        <a href="{{ route('user_profile') }}">@auth {{ Auth::user()->name }} @endauth</a>
                        <input type="submit" value="Cerrar Sesión">
                    </form>
                </li>
            @endguest
        </ul>
    </nav>
</header>

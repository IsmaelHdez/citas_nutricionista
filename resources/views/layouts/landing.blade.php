<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Vite CSS y JS -->
    @vite(['resources/js/app.js', 'resources/css/app.css'])

    <!-- Forzar modo light antes de que FluxUI cargue -->
    <script>
        // Establecer preferencia de tema light en localStorage ANTES de que Flux lo lea
        window.localStorage.setItem('flux.appearance', 'light');
    </script>

    <!-- Flux Appearance -->
    @fluxAppearance()
</head>
<body class="bg-white text-zinc-900">

    <div class="container mx-auto max-w-7xl">
        <!-- Header Livewire Component -->
        <livewire:header-nav />

        <!-- Main Content -->
        <main>
            @yield('content')
        </main>
    </div>

    <!-- Livewire Scripts -->
    @livewireScripts

    <!-- Opcional: Scripts adicionales -->
    @stack('scripts')
    @fluxScripts
</body>
</html>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Vite CSS y JS -->
    @vite(['resources/js/app.js', 'resources/css/app.css'])

    <!-- Livewire Styles -->
    @livewireStyles
</head>
<body>

    <!-- Header Livewire Component -->
    <livewire:header-nav />

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Livewire Scripts -->
    @livewireScripts

    <!-- Opcional: Scripts adicionales -->
    @stack('scripts')
</body>
</html>

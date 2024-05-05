<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=ABeeZee:400,500,600,700,800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Custom Styles -->
    <style>
        .soft-scrollbar::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        .soft-scrollbar::-webkit-scrollbar-thumb {
            background: rgba(71, 71, 71, 0.1);
            border-radius: 4px;
        }

        .soft-scrollbar::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.1);
            border-radius: 4px;
        }
    </style>

    <!-- Styles -->
    @livewireStyles
</head>

<body class="soft-scrollbar">
    <x-banner />

    <div class="font-sans text-gray-900 dark:text-gray-100 antialiased" style="background-color: black;">
        {{ $slot }}
    </div>

    <x-button-login />

    <x-footer />

    @livewireScripts

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

    @stack('scripts')
</body>

</html>

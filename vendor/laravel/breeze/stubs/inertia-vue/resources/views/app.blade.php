<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
<<<<<<< HEAD:vendor/laravel/breeze/stubs/inertia-vue/resources/views/app.blade.php
    <body class="font-sans antialiased">
        @inertia
=======
    <body>
        <div id="homeview"></div>
>>>>>>> 351e44921c3781349bf59b89fe14ac55f288a852:resources/views/app.blade.php
    </body>
</html>

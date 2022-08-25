<!DOCTYPE html>
<html lang="{{ str_replace('_','_', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Script -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id="app">
        <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
            @yield('content')
        </main>
    </div>
</body>
</html>
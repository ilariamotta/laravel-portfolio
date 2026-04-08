<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Il mio Portfolio</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body class="d-flex flex-column min-vh-100">
    @include('backoffice.partials.header')

    <main class="container py-4 flex-grow-1">
        @yield('dashboard')
        @yield('profilo')
    </main>

    @include('backoffice.partials.footer')
</body>
</html>
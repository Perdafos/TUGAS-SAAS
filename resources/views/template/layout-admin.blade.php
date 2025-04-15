<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="{{ asset('styles-admin.css') }}" rel="stylesheet"/>
    <script src="{{ asset('script.js') }}" defer></script>
</head>
<body class="d-grid" style="grid-template-columns: auto 1fr;">
    <head>
        @yield('header')
    </head>
    <main>
        @yield('main')
    </main>
    <footer>
        @yield('footer')
    </footer>

    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
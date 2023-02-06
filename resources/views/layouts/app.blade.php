<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('image/favicon.png') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>

<body>
    <div id="app">
        <livewire:peminjam.kategori></livewire:peminjam.kategori>

        <main class="mt-5">
            <br />
            <br />
            @yield('content')
        </main>
    </div>

    @livewireScripts
    <script>
        const password = document.getElementById("password");
        const togglePassword = document.getElementById("show");
        togglePassword.addEventListener("click", toggleClicked);

        function toggleClicked() {
            if (this.checked) {
                password.type = "text";
            } else {
                password.type = "password";
            }
        }
    </script>
</body>


</html>

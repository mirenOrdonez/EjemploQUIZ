<html>

<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Nombre de la app - @yield('titulo')</title>
</head>

<body>
    @section('barralateral')
    Esto es la barra lateral
    @show

    <div class="container">
        @yield('contenido')
    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .navegador {
            background-color: red;
        }

        .cuerpo {
            background-color: blue;
        }

        .footer {
            background-color: purple;
        }
    </style>
</head>
<body>


        <div class="navegador">
            @yield('navegador')

        </div>


        <div class="cuerpo">
            @yield('cuerpo')

        </div>


        <div class="footer">
            @yield('footer')

        </div>





    
</body>
</html>
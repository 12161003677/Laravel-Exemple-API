<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ágil - @yield('title')</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body class="antialiased">
    <div class="container mx-auto">
        <div id="app">
            <router-view></router-view>
        </div>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
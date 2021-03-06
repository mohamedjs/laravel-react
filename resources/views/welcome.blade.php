<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>React Start</title>
        <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    </head>
    <body class="antialiased">
        <div id="root"></div>

        <script src="{{ asset('/js/manifest.js') }}"></script>
        <script src="{{ asset('/js/vendor.js') }}"></script>
        <script src="{{ asset('/js/app.js') }}"></script>
    </body>
</html>

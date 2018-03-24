<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Larafeed</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
</head>
<body>
<div id="app">
    <v-app>
        <dashboard>
            @yield('content')
        </dashboard>
    </v-app>
</div>
<script src="{{ mix('js/app.js') }}"></script>
<script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</body>
</html>
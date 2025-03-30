<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite('resources/css/app.css')
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body class="bg-cover bg-center bg-fixed" style="background-image: url('/img/background.png');">
    <div class="flex items-center justify-center min-h-screen">
        <div class="container p-7 m-7 backdrop-blur-md bg-gray-900 bg-opacity-50 rounded-lg">
            <h1 class=""></h1>
        </div>
    </div>
</body>
</html>

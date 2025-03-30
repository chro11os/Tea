<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite('resources/css/app.css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100..800&display=swap" rel="stylesheet">

</head>
<body class="bg-cover bg-center bg-fixed font-custom" style="background-image: url('/img/background.png');">
    <div class="flex items-center justify-center min-h-screen">
        <div class="container p-7 m-7 backdrop-blur-md bg-gray-900 text-gray-200 bg-opacity-50 rounded-lg">
            <h1 class="items-center justify-center text-center text-9xl">Login</h1>
            <p class="text-center justify-normal text-3xl"> Test Font Test Font</p>
        </div>
    </div>
</body>
</html>

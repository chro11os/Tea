<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite('resources/css/app.css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
</head>
<body class="bg-cover bg-center bg-fixed font-custom" style="background-image: url('/img/backgroundLogin.png');">
    <div class="absolute top-4 left-4 flex items-center space-x-2">
        <img src="/img/logo.png" alt="Logo" 
            class="h-10 w-10 rounded-full animate-fade-in-scale">
        <span class="text-lg font-bold text-gray-900">Tea</span>
    </div>
    <div class="flex items-center justify-center min-h-screen">
        <div class="container p-4 m-4 max-w-md backdrop-blur-md bg-[#44624a]/30 text-[#f1ebe1] rounded-lg transition duration-300 hover:bg-[#44624a]/60">
            <div class="flex flex-col items-center justify-center space-y-6">
                <button 
                    onclick="window.location='{{ route('dashboard') }}'" 
                    class="w-full px-4 py-2 text-[#ffffff] bg-[#44624a] rounded-md hover:bg-[#17251a] focus:outline-none focus:ring-2 focus:ring-[#c0cfb2]">
                    Go to Dashboard
                </button>
                <h1 class="text-center text-5xl font-bold text-[#ffffff]">Welcome</h1>
                <p class="text-center text-lg text-[#c0cfb2]">Please login or register to continue</p>
                <div class="w-full p-6 bg-[#8ba888]/30 rounded-lg shadow-lg transition duration-300 hover:bg-[#8ba888]/90">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-[#f1ebe1]">Email</label>
                            <input id="email" type="email" name="email" required autofocus 
                                class="w-full px-4 py-2 mt-1 text-[#f1ebe1] bg-[#365d3c] rounded-md shadow-inner focus:outline-none focus:ring-2 focus:ring-[#c0cfb2] hover:bg-[#2a4a30]">
                        </div>
                        <div class="mb-4">
                            <label for="password" class="block text-sm font-medium text-[#f1ebe1]">Password</label>
                            <input id="password" type="password" name="password" required 
                                class="w-full px-4 py-2 mt-1 text-[#f1ebe1] bg-[#365d3c] rounded-md shadow-inner focus:outline-none focus:ring-2 focus:ring-[#c0cfb2] hover:bg-[#2a4a30]">
                        </div>
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <input type="checkbox" name="remember" id="remember" class="text-[#8ba888] focus:ring-[#8ba888]">
                                <label for="remember" 
                                    class="text-sm text-[#f1ebe1] hover:text-[#2a4a30] transition duration-300">
                                    Remember Me
                                </label>
                            </div>
                            <a href="{{ route('password.request') }}" 
                                class="text-sm text-[#c0cfb2] hover:text-[#2a4a30] transition duration-300">
                                Forgot Password?
                            </a>
                        </div>
                        <button type="submit" 
                            class="w-full px-4 py-2 text-[#ffffff] bg-[#44624a] rounded-md hover:bg-[#2e4a33] focus:outline-none focus:ring-2 focus:ring-[#c0cfb2]">
                            Login
                        </button>
                    </form>
                    <div class="mt-6 text-center">
                        <p class="text-sm text-[#f1ebe1]">
                            Don't have an account? 
                            <a href="{{ route('register') }}"
                                class="text-[#c0cfb2] hover:text-[#2a4a30] transition duration-300">
                                Register
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="absolute bottom-4 w-full text-center text-xs text-[#c0cfb2]">
        chro11os 2025
    </footer>
</body>
</html>

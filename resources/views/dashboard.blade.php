<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        @vite('resources/css/app.css')
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    </head>
    <body class="bg-cover bg-center bg-fixed font-custom" style="background-image: url('/img/backgroundDashboard.png');">
        <div class="flex items-center justify-center min-h-screen">
            <div class="container grid grid-cols-3 gap-4 p-4 m-4 max-w-6xl backdrop-blur-md bg-[#44624a]/30 text-[#f1ebe1] rounded-lg">
                <!-- Left Grid: Chats -->
                <div class="p-4 bg-[#8ba888]/30 rounded-lg shadow-lg transition duration-300 hover:bg-[#8ba888]/90">
                    <div class="absolute top-4 left-4 flex items-center space-x-2 p-3">
                        <img src="/img/pfp.jpg" alt="Profile Picture" class="h-12 w-12 rounded-full animate-fade-in-scale">
                        <span class="text-sm font-poppins text-gray-800">Neil Brags Guzman</span>
                    </div>
                    <!-- Todo: Add laravel websockets, for irl chat -->

                    <ul class="space-y-2 mt-14">
                        <li class="p-2 bg-[#365d3c] rounded-md hover:bg-[#2a4a30] transition duration-300">Chat 1</li>
                        <li class="p-2 bg-[#365d3c] rounded-md hover:bg-[#2a4a30] transition duration-300">Chat 2</li>
                        <li class="p-2 bg-[#365d3c] rounded-md hover:bg-[#2a4a30] transition duration-300">Chat 3</li>
                        <!-- Add more chats as needed -->
                    </ul>
                </div>
                <!-- Middle Grid: Messaging -->
                <div class="p-4 bg-[#8ba888]/30 rounded-lg shadow-lg transition duration-300 hover:bg-[#8ba888]/90">
                    <h2 class="text-lg font-bold text-[#ffffff] mb-4">Messaging</h2>
                    <div class="h-96 overflow-y-auto p-4 bg-[#365d3c] rounded-md shadow-inner">
                        <!-- Messages will appear here -->
                        <p class="text-[#f1ebe1]">Message 1</p>
                        <p class="text-[#f1ebe1]">Message 2</p>
                        <p class="text-[#f1ebe1]">Message 3</p>
                    </div>
                    <div class="mt-4 flex items-center space-x-2">
                        <textarea class="w-full p-2 bg-[#365d3c] text-[#f1ebe1] rounded-md shadow-inner focus:outline-none focus:ring-2 focus:ring-[#c0cfb2]" rows="3" placeholder="Type your message..."></textarea>
                        <button class="p-2 bg-[#44624a] text-[#ffffff] rounded-md hover:bg-[#2e4a33] focus:outline-none focus:ring-2 focus:ring-[#c0cfb2]">
                            <!-- Attachment Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16.5 10.5L7.5 19.5M7.5 19.5L4.5 16.5M7.5 19.5L19.5 7.5M19.5 7.5L16.5 4.5M19.5 7.5L22.5 10.5" />
                            </svg>
                        </button>
                        <button class="p-2 bg-[#44624a] text-[#ffffff] rounded-md hover:bg-[#2e4a33] focus:outline-none focus:ring-2 focus:ring-[#c0cfb2]">
                            <!-- Voice Recording Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v9m0 0a3 3 0 01-3-3m3 3a3 3 0 003-3m-3 3v6m6-3a6 6 0 01-12 0" />
                            </svg>
                        </button>
                    </div>
                    <button class="w-full mt-2 px-4 py-2 text-[#ffffff] bg-[#44624a] rounded-md hover:bg-[#2e4a33] focus:outline-none focus:ring-2 focus:ring-[#c0cfb2]">Send</button>
                </div>
                <!-- Right Grid: Sent Media -->
                <div class="p-4 bg-[#8ba888]/30 rounded-lg shadow-lg transition duration-300 hover:bg-[#8ba888]/90">
                    <h2 class="text-lg font-bold text-[#ffffff] mb-4">Sent Media</h2>
                    <div class="grid grid-cols-2 gap-2">
                        <div class="h-24 bg-[#365d3c] rounded-md shadow-inner"></div>
                        <div class="h-24 bg-[#365d3c] rounded-md shadow-inner"></div>
                        <div class="h-24 bg-[#365d3c] rounded-md shadow-inner"></div>
                        <div class="h-24 bg-[#365d3c] rounded-md shadow-inner"></div>
                        <!-- Add more media placeholders as needed -->
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
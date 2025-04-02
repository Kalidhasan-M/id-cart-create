<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ID Card Generator</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /* [Previous Tailwind CSS styles remain the same] */
            </style>
        @endif
    </head>
    <body class="bg-[#F5F5F5] dark:bg-[#121212] text-[#333333] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 dark:text-white border border-gray-300 hover:border-gray-400 dark:border-gray-600 dark:hover:border-gray-400 rounded-sm text-sm leading-normal"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 dark:text-white text-gray-800 border border-transparent hover:border-gray-300 dark:hover:border-gray-600 rounded-sm text-sm leading-normal"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 dark:text-white border border-gray-300 hover:border-gray-400 text-gray-800 dark:border-gray-600 dark:hover:border-gray-400 rounded-sm text-sm leading-normal">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>
        <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
                <div class="text-[13px] leading-[20px] flex-1 p-6 pb-12 lg:p-20 bg-white dark:bg-[#1E1E1E] dark:text-white shadow-[inset_0px_0px_0px_1px_rgba(0,0,0,0.1)] dark:shadow-[inset_0px_0px_0px_1px_rgba(255,255,255,0.1)] rounded-bl-lg rounded-br-lg lg:rounded-tl-lg lg:rounded-br-none">
                    <h1 class="mb-4 text-2xl font-bold">ID Card Generator</h1>
                    <p class="mb-6 text-gray-600 dark:text-gray-400">Create professional ID cards for your organization with our easy-to-use system.</p>
                    
                    <div class="mb-8">
                        <h2 class="text-lg font-semibold mb-3">Features:</h2>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Customizable templates</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Bulk ID card generation</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>QR code integration</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Secure database storage</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="/id-form" class="inline-flex items-center justify-center px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-md transition-colors">
                            Create ID Card Now
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                        {{-- <a href="/templates" class="inline-flex items-center justify-center px-6 py-3 border border-gray-300 hover:border-gray-400 dark:border-gray-600 dark:hover:border-gray-400 font-medium rounded-md transition-colors">
                            View Templates
                        </a> --}}
                    </div>
                </div>
                
                <div class="bg-blue-50 dark:bg-[#0A192F] relative lg:-ml-px -mb-px lg:mb-0 rounded-t-lg lg:rounded-t-none lg:rounded-r-lg aspect-[335/376] lg:aspect-auto w-full lg:w-[438px] shrink-0 overflow-hidden flex items-center justify-center">
                    <!-- ID Card Preview -->
                    <div class="w-64 h-40 bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden transform rotate-3">
                        <div class="h-1/3 bg-blue-600 dark:bg-blue-800 flex items-center px-4">
                            <h3 class="text-white font-bold text-sm">COMPANY ID</h3>
                        </div>
                        <div class="p-4 flex">
                            <div class="w-1/3 flex items-center justify-center">
                                <div class="w-16 h-16 bg-gray-200 dark:bg-gray-700 rounded-full flex items-center justify-center">
                                    <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="w-2/3 pl-2">
                                <h4 class="font-bold text-sm">John Doe</h4>
                                <p class="text-xs text-gray-600 dark:text-gray-400 mt-1">Employee ID: 12345</p>
                                <p class="text-xs text-gray-600 dark:text-gray-400">Department: IT</p>
                                <div class="mt-2 w-full h-8 bg-gray-100 dark:bg-gray-700 flex items-center justify-center">
                                    <span class="text-xs text-gray-500">QR Code</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="absolute inset-0 rounded-t-lg lg:rounded-t-none lg:rounded-r-lg shadow-[inset_0px_0px_0px_1px_rgba(0,0,0,0.1)] dark:shadow-[inset_0px_0px_0px_1px_rgba(255,255,255,0.1)]"></div>
                </div>
            </main>
        </div>

        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
        
        <footer class="mt-8 text-center text-sm text-gray-600 dark:text-gray-400">
            <p>© 2023 ID Card Generator. All rights reserved.</p>
        </footer>
    </body>
</html>
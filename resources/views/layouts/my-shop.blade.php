<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased">

    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')

        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <div name="header">
                    <div class="flex justify-between">
                        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                            {{ __('Belanja yuk!!') }}
                        </h2>
                        <ul class="flex space-x-6">
                            <li><a href="/dashboard" class="text-gray-600 hover:text-indigo-600">Home</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-indigo-600">Shop</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-indigo-600">Categories</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-indigo-600">About</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-indigo-600">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <main>
            @yield('content')
        </main>

    </div>
</body>

</html>

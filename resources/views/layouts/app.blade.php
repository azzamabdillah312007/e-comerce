<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class=" h-auto bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Tentang Kami -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Tentang Kami</h3>
                    <p class="text-gray-400">
                        Kami adalah platform e-commerce yang menyediakan layanan penjualan produk terbaik. Bergabunglah
                        bersama kami untuk meningkatkan bisnis Anda.
                    </p>
                </div>

                <!-- Navigasi -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Navigasi</h3>
                    <ul>
                        <li class="mb-2"><a href="#" class="text-gray-400 hover:text-indigo-400">Beranda</a>
                        </li>
                        <li class="mb-2"><a href="#" class="text-gray-400 hover:text-indigo-400">Toko Saya</a>
                        </li>
                        <li class="mb-2"><a href="#" class="text-gray-400 hover:text-indigo-400">Produk</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-indigo-400">Hubungi Kami</a></li>
                    </ul>
                </div>

                <!-- Kontak -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Kontak</h3>
                    <p class="text-gray-400">Email: support@toko.com</p>
                    <p class="text-gray-400">Telepon: +62 812 3456 7890</p>
                    <p class="text-gray-400">Alamat: Jl. E-commerce No. 123, Jakarta</p>
                </div>
            </div>

            <!-- Copyright -->
            <div class="mt-8 border-t border-gray-700 pt-4 text-center">
                <p class="text-gray-400">&copy; 2024 Toko Saya. Semua Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>

</body>

</html>

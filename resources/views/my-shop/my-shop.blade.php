@extends('layouts.my-shop')

@section('title', 'Toko saya')

@section('content')

    <section
        class="w-full h-max bg-gradient-to-r from-indigo-500 to-indigo-700 px-10 py-14 flex flex-col items-center justify-center">
        <h2 class="text-white text-5xl font-extrabold text-center mb-4">Selamat datang di Toko Saya</h2>
        <p class="text-white text-lg text-center mb-6 max-w-2xl">
            Tambah produk baru atau jual lebih banyak barang agar penghasilan Anda bertambah! Segera mulai jualan di toko
            Anda.
        </p>
        <div class="relative">
            <img src="{{ asset('images/shoping-cart2.png') }}" alt="Shopping Cart"
                class="w-[220px] mx-auto shadow-xl rounded-lg hover:scale-105 transition-transform duration-300">
        </div>
    </section>

    <!-- Section untuk Daftar Barang yang Dijual -->
    <section class="py-12 bg-gray-100">
        <div class="container mx-auto px-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-2xl font-bold">Produk yang Anda Jual</h3>
                <a href="/my-shop/add-product"
                    class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">Tambah
                    Produk</a>
            </div>

            <!-- Grid Produk -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Contoh produk -->

                @foreach ($products as $myProduct)
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img src="{{  asset('product_images/' . $myProduct->image) }}" alt="Product Image"
                            class="w-full h-40 object-cover mb-4 rounded-md">
                        <h4 class="text-xl font-semibold mb-2">{{ $myProduct->name }}</h4>
                        <p class="text-gray-700 mb-4">Deskripsi singkat tentang produk ini.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-indigo-600 font-bold">${{ $myProduct->price }}</span>
                            <a href="#"
                                class="bg-indigo-500 text-white px-4 py-2 rounded-md hover:bg-indigo-600">Edit</a>
                        </div>
                    </div>
                @endforeach

                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="{{ asset('images/product1.jpg') }}" alt="Product Image"
                        class="w-full h-40 object-cover mb-4 rounded-md">
                    <h4 class="text-xl font-semibold mb-2">Nama Produk</h4>
                    <p class="text-gray-700 mb-4">Deskripsi singkat tentang produk ini.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-indigo-600 font-bold">Rp 120.000</span>
                        <a href="#" class="bg-indigo-500 text-white px-4 py-2 rounded-md hover:bg-indigo-600">Edit</a>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="{{ asset('images/product1.jpg') }}" alt="Product Image"
                        class="w-full h-40 object-cover mb-4 rounded-md">
                    <h4 class="text-xl font-semibold mb-2">Nama Produk</h4>
                    <p class="text-gray-700 mb-4">Deskripsi singkat tentang produk ini.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-indigo-600 font-bold">Rp 120.000</span>
                        <a href="#" class="bg-indigo-500 text-white px-4 py-2 rounded-md hover:bg-indigo-600">Edit</a>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="{{ asset('images/product1.jpg') }}" alt="Product Image"
                        class="w-full h-40 object-cover mb-4 rounded-md">
                    <h4 class="text-xl font-semibold mb-2">Nama Produk</h4>
                    <p class="text-gray-700 mb-4">Deskripsi singkat tentang produk ini.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-indigo-600 font-bold">Rp 120.000</span>
                        <a href="#" class="bg-indigo-500 text-white px-4 py-2 rounded-md hover:bg-indigo-600">Edit</a>
                    </div>
                </div>
                <!-- Tambahkan produk lain di sini -->
            </div>
        </div>
    </section>

    <!-- Section Statistik Toko -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6">
            <h3 class="text-2xl font-bold mb-6 text-center">Statistik Toko</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-indigo-600 text-white p-6 rounded-lg shadow-lg text-center">
                    <h4 class="text-4xl font-bold mb-2">120</h4>
                    <p class="text-lg">Total Produk</p>
                </div>
                <div class="bg-indigo-600 text-white p-6 rounded-lg shadow-lg text-center">
                    <h4 class="text-4xl font-bold mb-2">350</h4>
                    <p class="text-lg">Penjualan</p>
                </div>
                <div class="bg-indigo-600 text-white p-6 rounded-lg shadow-lg text-center">
                    <h4 class="text-4xl font-bold mb-2">Rp 5.000.000</h4>
                    <p class="text-lg">Pendapatan</p>
                </div>
            </div>
        </div>
    </section>

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
                        <li class="mb-2"><a href="#" class="text-gray-400 hover:text-indigo-400">Beranda</a></li>
                        <li class="mb-2"><a href="#" class="text-gray-400 hover:text-indigo-400">Toko Saya</a></li>
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


@endsection

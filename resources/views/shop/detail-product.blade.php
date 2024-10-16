@extends('layouts.my-shop')

@section('title', 'Toko saya')

@section('content')

    <div class="container mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg overflow-hidden">
            <!-- Image Produk -->
            <div class="relative bg-gray-200 h-80 md:h-96">
                <img class="object-cover w-full h-full"
                    src="{{ asset('product_images/'.$product->image) }}" alt="Gambar Produk">
            </div>

            <!-- Konten Produk -->
            <div class="p-8">
                <!-- Nama Produk -->
                <h1 class="text-3xl font-bold text-gray-900 ">{{ $product->name }}</h1>
                <h2 class="text-lg font-semibold text-indigo-600 mb-4">{{ $product->brand }}</h2>

                <!-- Deskripsi Produk -->
                <p class="text-gray-700 leading-relaxed mb-6">
                    {{ $product->description ?? 'Deskripsi produk tidak tersedia.' }}
                </p>

                <!-- Harga dan Tindakan -->
                <div class="flex items-center justify-between mb-6">
                    <span class="text-2xl font-bold text-gray-900">
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                    </span>

                    <!-- Tombol Beli -->
                    <button
                        class="bg-blue-600 text-white py-2 px-6 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-200">
                        Beli Sekarang
                    </button>
                </div>

                <!-- Info Tambahan Produk -->
                <div class="border-t border-gray-200 pt-4">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">Informasi Produk</h2>
                    <ul class="list-disc pl-5 text-gray-700 space-y-1">
                        <li>Kategori: {{ $product->category ?? 'Tidak diketahui' }}</li>
                        <li>Ukuran: {{ $product->size ?? 'Tidak tersedia' }}</li>
                        <li>Warna: {{ $product->color ?? 'Tidak tersedia' }}</li>
                        <li>Stok: {{ $product->quantity ?? 'Tidak tersedia' }}</li>
                        <li>Berat: {{ $product->weight ?? 'Tidak tertera' }} kg</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Tombol Kembali -->
        <div class="mt-8 text-center">
            <a href="/dashboard" class="text-blue-600 hover:underline">
                &larr; Kembali ke halaman sebelumnya
            </a>
        </div>
    </div>



@endsection

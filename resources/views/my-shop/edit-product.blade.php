@extends('layouts.my-shop')

@section('title', 'Toko saya')

@section('content')

<section class=" dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Tambahkan produk baru</h2>
        <form action="{{ route('my-shop.update-product' , $product->id) }}" method="POST" enctype="multipart/form-data"
            class="p-4 bg-white rounded-lg shadow">
            @csrf
            @method('PUT')
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-2">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        produk</label>  
                    <input type="text" name="name" id="name_product"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Nama produk" value="{{ $product->name }}">
                    @error('name')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:col-span-2">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lokasi
                    </label>
                    <input type="text" name="location" id="location"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Kecamatan , provinsi" value="{{ $product->location }}">
                    @error('location')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:col-span-2">
                    <label for="brand"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand</label>
                    <input type="text" name="brand" id="brand"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Adidas" value="{{ $product->brand }}">
                    @error('brand')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:col-span-2">
                    <label for="color" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Warna
                        produk</label>
                    <input type="text" name="color" id="color"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Biru laut" value="{{ $product->color }}">
                    @error('color')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:col-span-2">
                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori
                        produk</label>
                    <select id="category" name="category"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected="">Pilih</option>
                        <option value="Fashion">Fashion</option>
                        <option value="Elektronik">Elektronik</option>
                        <option value="Rumah tangga">Rumah tangga</option>
                    </select>
                    @error('category')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:col-span-2">
                    <label for="quantity"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stok</label>
                    <input type="text" name="quantity" id="quantity"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="234" value="{{ $product->quantity }}">
                    @error('quantity')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:col-span-2">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Harga</label>
                    <input type="text" name="price" id="price"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="90" value="{{ $product->price }}"">
                    @error('price')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:col-span-2">
                    <label for="size" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ukuran
                        (opsional)</label>
                    <input type="text" name="size" id="size"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="M , L , XL" value="{{ $product->size }}">
                </div>
                <div class="sm:col-span-2">
                    <label for="description"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                    <textarea name="description" id="description" rows="8"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Your description here">{{ $product->description }}</textarea>
                    @error('description')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:col-span-2">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload
                        file</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        name="image" id="file_input" type="file">
                    @error('image')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

            </div>
            <button type="submit"
                class="inline-flex bg-indigo-600 items-center px-5 py-3 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                Edit product
            </button>
        </form>
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

@endsection
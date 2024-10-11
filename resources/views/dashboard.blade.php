<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Belanja yuk!!') }}
            </h2>
            <ul class="flex space-x-6">
                <li><a href="/dashboard" class="text-gray-600 hover:text-indigo-600">Dashboard</a></li>
                <li><a href="#" class="text-gray-600 hover:text-indigo-600">Shop</a></li>
                <li><a href="#" class="text-gray-600 hover:text-indigo-600">Categories</a></li>
                <li><a href="/about" class="text-gray-600 hover:text-indigo-600">About</a></li>
                <li><a href="/contact" class="text-gray-600 hover:text-indigo-600">Contact</a></li>
            </ul>
        </div>
    </x-slot>

    <section
        class="w-full h-max bg-gradient-to-r from-indigo-500 to-indigo-700 p-10 flex flex-col items-center justify-center">
        <h2 class="text-white text-5xl font-extrabold text-center mb-4">Selamat datang di belanja Yuk!!</h2>
        <p class="text-white text-lg text-center mb-6 max-w-2xl">
            Beli produk produk terbaik di e-comerce ini dengan kualitas tinggi dan harga terjangkau , harga murah tapi
            kualitas ga murahan .
        </p>
        <div class="relative">
            <img src="{{ asset('images/dashboard.png') }}" alt="Shopping Cart"
                class="w-[200px] mx-auto shadow-xl rounded-lg hover:scale-105 transition-transform duration-300">
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-16">
        <div class="container mx-auto px-0 lg:px-4">
            <h2 class="text-2xl font-bold text-center mb-8">Shop by Categories</h2>
            <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($products as $product)
                    <div class="bg-white p-6 border-e border-b">
                        <img src="{{ asset('product_images/' . $product->image) }}" alt="Category 1"
                            class="w-full h-40 object-cover mb-4">
                        <h3 class="text-lg font-semibold text-gray-700">{{ $product->name }}</h3>
                        {{-- <div class="flex justify-between"> --}}
                        <h3 class=" text-base  text-gray-700">{{ $product->brand }}</h3>
                        <h3 class=" text-base font-medium text-indigo-600">Rp.{{ $product->price }}.000</h3>
                        {{-- </div> --}}
                        <h3 class=" text-base  text-gray-700">{{ $product->location }}</h3>
                        <button type="button"
                            class="w-full py-2.5 px-5 my-2 text-sm font-medium text-white focus:outline-none bg-indigo-600 rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Beli Sekarang</button>

                    </div>
                @endforeach
                {{-- <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="https://via.placeholder.com/150" alt="Category 2" class="w-full h-40 object-cover mb-4">
                    <h3 class="text-xl font-semibold text-gray-700">Category 2</h3>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="https://via.placeholder.com/150" alt="Category 3" class="w-full h-40 object-cover mb-4">
                    <h3 class="text-xl font-semibold text-gray-700">Category 3</h3>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="https://via.placeholder.com/150" alt="Category 4" class="w-full h-40 object-cover mb-4">
                    <h3 class="text-xl font-semibold text-gray-700">Category 4</h3>
                </div> --}}
            </div>
        </div>
    </section>

    <!-- Popular Products Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold text-center mb-8">Popular Products</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Product Card -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="https://via.placeholder.com/150" alt="Product 1" class="w-full h-40 object-cover mb-4">
                    <h3 class="text-xl font-semibold text-gray-700">Product 1</h3>
                    <p class="text-gray-500 mb-4">$49.99</p>
                    <a href="#" class="bg-indigo-600 text-white font-bold py-2 px-6 rounded-full">Buy Now</a>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="https://via.placeholder.com/150" alt="Product 2" class="w-full h-40 object-cover mb-4">
                    <h3 class="text-xl font-semibold text-gray-700">Product 2</h3>
                    <p class="text-gray-500 mb-4">$79.99</p>
                    <a href="#" class="bg-indigo-600 text-white font-bold py-2 px-6 rounded-full">Buy Now</a>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="https://via.placeholder.com/150" alt="Product 3" class="w-full h-40 object-cover mb-4">
                    <h3 class="text-xl font-semibold text-gray-700">Product 3</h3>
                    <p class="text-gray-500 mb-4">$29.99</p>
                    <a href="#" class="bg-indigo-600 text-white font-bold py-2 px-6 rounded-full">Buy Now</a>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="https://via.placeholder.com/150" alt="Product 4" class="w-full h-40 object-cover mb-4">
                    <h3 class="text-xl font-semibold text-gray-700">Product 4</h3>
                    <p class="text-gray-500 mb-4">$99.99</p>
                    <a href="#" class="bg-indigo-600 text-white font-bold py-2 px-6 rounded-full">Buy Now</a>
                </div>
            </div>
        </div>
    </section>


</x-app-layout>

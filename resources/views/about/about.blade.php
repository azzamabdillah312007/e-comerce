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
        <h2 class="text-white text-5xl font-extrabold text-center mb-4">Tentang kami</h2>
        <p class="text-white text-lg text-center mb-6 max-w-2xl">
            Penjelasan singkat tentang e-commerce kami
        </p>
        <div class="relative">
            <img src="{{ asset('images/about.png') }}" alt="Shopping Cart"
                class="w-[270px] mx-auto shadow-xl rounded-lg hover:scale-105 transition-transform duration-300">
        </div>
    </section>

    <section class="flex justify-center items-center min-h-screen py-6 ">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-3xl w-full">
            <h1 class="text-3xl font-semibold text-indigo-500 mb-6 text-center">About Our E-commerce Application</h1>
            <p class="text-gray-700 text-lg mb-4">
                Welcome to our e-commerce platform! This application is designed to make buying and selling products
                easier, faster, and more convenient. Our platform connects buyers and sellers from all over, providing a
                seamless and secure shopping experience.
            </p>
            <p class="text-gray-700 text-lg mb-4">
                With a user-friendly interface, users can easily browse through a variety of products, add items to
                their cart, and securely check out. Sellers can manage their products, track sales, and communicate with
                buyers through our platform.
            </p>
            <h2 class="text-2xl font-semibold text-indigo-500 mt-6 mb-4">Disclaimer</h2>
            <p class="text-gray-700 text-lg mb-4">
                Our e-commerce platform serves as a marketplace for individual sellers and businesses. We strive to
                ensure the quality and authenticity of products listed on our platform, but we are not responsible for
                the accuracy of product descriptions, prices, or other information provided by sellers.
            </p>
            <p class="text-gray-700 text-lg mb-4">
                Transactions conducted through this platform are between the buyer and the seller. While we provide
                secure payment methods, we recommend that users conduct their own due diligence before making a
                purchase. Should any disputes arise, we are available to mediate and assist in resolving issues.
            </p>
            <p class="text-gray-700 text-lg">
                Thank you for trusting us as your go-to e-commerce solution. Happy shopping!
            </p>
        </div>
    </section>
</x-app-layout>

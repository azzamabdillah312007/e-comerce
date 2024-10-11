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
        <h2 class="text-white text-5xl font-extrabold text-center mb-4">Apakah kamu perlu bantuan ?</h2>
        <p class="text-white text-lg text-center mb-6 max-w-2xl">
            Laporkan masalah kamu untuk mendapatkan penanganan lebih lanjut dari admin!
        </p>
        <div class="relative">
            <img src="{{ asset('images/contact.png') }}" alt="Shopping Cart"
                class="w-[220px] mx-auto shadow-xl rounded-lg hover:scale-105 transition-transform duration-300">
        </div>
    </section>

    <section class="flex justify-center items-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
            <h1 class="text-3xl font-semibold text-indigo-500 mb-6 text-center">Contact Us</h1>
            <form action="#" method="POST">
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" id="name" name="name"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="Your Name" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="Your Email" required>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea id="message" name="message" rows="4"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="Your Message" required></textarea>
                </div>
                <div class="flex justify-center">
                    <button type="submit"
                        class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-indigo-400">Send
                        Message</button>
                </div>
            </form>
        </div>
    </section>

</x-app-layout>

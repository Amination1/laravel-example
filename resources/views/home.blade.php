<x-layout>
    <x-slot:heading>
        Home Page🏡
    </x-slot:heading>

    <div class="min-h-screen bg-gradient-to-r from-blue-50 to-purple-50 flex flex-col items-center justify-center p-6">
        <!-- Header -->
        <header class="text-center mb-8">
            <h1 class="text-5xl font-bold text-gray-900 mb-4">Welcome to Our Project 🏠</h1>
            <p class="text-xl text-gray-600">A simple and clean Laravel project with Tailwind CSS</p>
        </header>

        <!-- Main Content -->
        <main class="text-center">
            <div class="bg-white p-8 rounded-lg shadow-lg max-w-2xl">
                <h2 class="text-3xl font-semibold text-gray-800 mb-4">Get Started</h2>
                <p class="text-gray-600 mb-6">
                    This is a test project built with Laravel and Tailwind CSS. It's designed to help you quickly start
                    your next project with a clean and modern design.
                </p>
                <a href="/jobs" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300">
                    Explore Jobs
                </a>
            </div>
        </main>

        <!-- Footer -->
        <footer class="mt-8 text-center text-gray-500">
            <p>&copy; 2025 Amination. All rights reserved.</p>
        </footer>
    </div>
</x-layout>

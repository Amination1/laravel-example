<x-layout>
    <x-slot:heading>
        {{ $job['title'] }} 👨🏻‍💼
    </x-slot:heading>

    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <div class="space-y-4">
            <h1 class="text-3xl font-bold text-gray-900">{{ $job['title'] }}</h1>
            <div class="flex items-center space-x-2">
                <span class="text-lg font-medium text-gray-700">Salary:</span>
                <span class="text-lg text-gray-600">{{ $job['salary'] }}</span>
            </div>
            <div class="flex items-center space-x-2">
                <span class="text-lg font-medium text-gray-700">Job ID:</span>
                <span class="text-lg text-gray-600">{{ $job['id'] }}</span>
            </div>
        </div>

        <!-- Optional: Add a back button -->
        <div class="mt-6">
            <a href="/jobs" class="text-blue-600 hover:text-blue-800 underline">← Back to Jobs</a>
        </div>
    </div>
</x-layout>

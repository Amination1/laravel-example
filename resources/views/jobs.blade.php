<x-layout>
    <x-slot:heading>
        Jobs 👨🏻‍💼
    </x-slot:heading>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
            <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Salary</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Details</th>
            </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
            @foreach($jobs as $job)
                <tr class="hover:bg-gray-50 transition duration-150 ease-in-out">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $job['title'] }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $job['salary'] }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-600 hover:text-blue-800">
                        <a href="/jobs/{{ $job['id'] }}" class="underline">View Details</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-layout>

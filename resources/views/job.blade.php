<x-layout>
    <x-slot:heading>
        {{$job['title']}} 👨🏻‍💼
    </x-slot:heading>
    <ul>
            <li>
                <h1 class="font-bold text-lg">Job's name : {{$job['title']}} </h1>
                <h1>Job's price : {{$job['salary']}}</h1>
            </li>
    </ul>
</x-layout>

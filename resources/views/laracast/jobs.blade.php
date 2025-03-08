<x-layout>
    <x-slot:heading>
        Jobs Listings
    </x-slot:heading>
    
    {{-- <h1>Hello from Home Page</h1> --}}
    {{-- <h1 class="text-2xl/7 font-bold mb-4">{{ $salam['greeting'] }}. from Home Page, My name is {{ $salam['name'] }}</h1> --}}

    {{-- <h2 class="text-2xl/7 font-bold text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">Back End Developer</h2> --}}

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
                    <strong>{{ $job['title'] }}:</strong> Pays: {{ $job['salary'] }} per year.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
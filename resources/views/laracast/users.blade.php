<x-layout>
    <x-slot:heading>
        Users Listings
    </x-slot:heading>

    {{-- <h1>Hello from Users Page</h1> --}}

    
    <ul>
        @foreach ($users as $user)
            <li>
                <a href="/users/{{ $user['id'] }}" class="text-blue-500 hover:underline">
                    <strong>{{ $user['first_name'] }}:</strong> Pays: {{ $user['last_name'] }} per year.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
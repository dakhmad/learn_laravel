{{-- Updated --}}
<x-layout>
    <x-slot:heading>
        User
    </x-slot:heading>

    <h2 class="text-lg font-bold">{{ $user['first_name'] }}</h2>

    <p>
        This User last name {{ $user['last_name'] }} per year.
    </p>
</x-layout>
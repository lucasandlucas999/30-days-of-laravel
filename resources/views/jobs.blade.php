<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li>
                Puesto: {{ $job['title'] }} -- Salario: {{ $job['salary'] }}
            </li>
        @endforeach
    </ul>
</x-layout>

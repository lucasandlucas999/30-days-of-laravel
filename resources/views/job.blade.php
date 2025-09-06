<x-layout>
    <x-slot:heading>
        Job    
    </x-slot>
    <h2 class="text-lg font-semibold">{{ $job['title'] }}</h2>
    <p class="mt-2">Este trabajo paga {{ $job['salary'] }} por año</p>

</x-layout>
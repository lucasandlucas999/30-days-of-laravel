@props(['active' => false])
@props(['type' => ''])

@if($type === 'button')
    <button class="bg-gray-900 text-white  rounded-md px-3 py-2 text-sm font-medium">
        {{ $slot }}
    </button>
@else
    <a href="{{ $attributes['href'] }}"
        class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">
        {{ $slot }} </a>
@endif


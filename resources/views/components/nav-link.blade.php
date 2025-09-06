<a href="/{{ ltrim($attributes['href'], '/') }}"
    class="{{ request()->is($attributes['href']) ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">
    {{ $slot }} </a>
@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'inline-flex items-center px-1 pt-1 border-b-4 border-orange-400 text-sm font-bold leading-5 text-orange-500 focus:outline-none focus:border-orange-700 transition duration-150 ease-in-out'
                : 'inline-flex items-center px-1 pt-1 border-b-4 border-transparent text-sm font-bold leading-5 text-gray-300 hover:text-orange-500 hover:border-orange-300 focus:outline-none focus:text-orange-700 focus:border-orange-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

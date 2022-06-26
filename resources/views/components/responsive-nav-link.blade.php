@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 mx-2 rounded-lg border-rose-400 text-base no-underline font-medium text-white bg-rose-500 focus:outline-none focus:text-rose-800 focus:bg-rose-100 focus:border-rose-700 transition duration-150 ease-in-out'
            : 'block pl-3 pr-4 py-2 mx-2 rounded-lg border-transparent text-base no-underline font-medium text-gray-600 hover:text-gray-700 hover:bg-gray-100 hover:border-rose-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-rose-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

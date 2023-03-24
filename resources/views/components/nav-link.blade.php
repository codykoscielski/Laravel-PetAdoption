@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900  focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out font-amatic'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-3xl font-medium text-light leading-5   hover:text-orange hover:border-gray-300  focus:outline-none focus:text-gray-700  focus:border-gray-300  transition duration-150 ease-in-out font-amatic';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

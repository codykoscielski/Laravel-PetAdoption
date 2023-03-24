<button {{ $attributes->merge(['type' => 'submit', 'class' => 'px-4 py-2 bg-orange border border-transparent rounded-md font-semibold text-xs text-light uppercase hover:bg-light hover:text-orange focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-250 shadow-md hover:shadow-inner']) }}>
    {{ $slot }}
</button>

<button type={{ $type }} {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-green-700 border border-gray-300 rounded-md font-semibold text-sm text-white shadow-sm hover:bg-yellow-500 hover:border-yellow-500 hover:text-white focus:outline-none disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

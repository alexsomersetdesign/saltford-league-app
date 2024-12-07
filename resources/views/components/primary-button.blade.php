<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center border border-transparent rounded-md font-semibold text-xs  hover:text-white hover:bg-yellow-500 focus:bg-yellow-500 active:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

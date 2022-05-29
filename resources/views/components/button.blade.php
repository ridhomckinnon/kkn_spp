<button {{ $attributes->merge(['type' => 'submit', 'class' => 'items-center font-semibold w-full py-3 bg-red-700 border-transparent rounded-xl text-white uppercase tracking-widest hover:bg-red-900 focus:outline-none focus:border-red-900 focus:ring ring-red-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

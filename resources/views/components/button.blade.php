<button {{ $attributes->merge(['type' => 'submit', 'class' => 'items-center font-semibold w-full py-3 bg-rose-500 border border-transparent rounded-xl text-white uppercase tracking-widest hover:bg-rose-700 active:bg-rose-900 focus:outline-none focus:border-rose-900 focus:ring ring-rose-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

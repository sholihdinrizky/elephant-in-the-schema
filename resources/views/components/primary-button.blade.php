<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center px-6 py-3 bg-white text-zinc-950 border border-transparent rounded-full font-bold text-xs uppercase tracking-wider hover:bg-zinc-200 active:bg-zinc-300 focus:outline-none focus:ring-2 focus:ring-[#ff5533] focus:ring-offset-2 focus:ring-offset-[#0e1017] transition ease-in-out duration-150 shadow-lg shadow-white/5']) }}>
    {{ $slot }}
</button>

@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'bg-black/40 border border-white/10 text-white placeholder-zinc-500 text-sm focus:border-[#ff5533] focus:ring-1 focus:ring-[#ff5533] rounded-xl shadow-sm transition']) }}>

<x-guest-layout>
    <div class="bg-[#232320] rounded-2xl border border-white/10 p-8">
        <h1 class="font-serif text-2xl mb-1">Lupa Password?</h1>
        <p class="text-xs text-zinc-400 mb-6">Masukkan email Anda untuk mendapatkan link reset password.</p>

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}" class="space-y-4">
            @csrf

            <div>
                <label for="email" class="block text-xs font-semibold text-zinc-300 mb-1">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                       placeholder="nama@its.ac.id"
                       class="w-full px-4 py-2.5 rounded-lg bg-black/30 border border-white/10 text-white text-sm placeholder-zinc-500 focus:border-[#c4704b] focus:ring-1 focus:ring-[#c4704b] transition" />
                <x-input-error :messages="$errors->get('email')" class="mt-1 text-xs text-red-400" />
            </div>

            <button type="submit" class="w-full py-3 rounded-full bg-white text-[#1b1b18] font-semibold text-sm hover:bg-zinc-200 transition">
                Kirim Link Reset
            </button>
        </form>

        <p class="mt-6 text-center text-xs text-zinc-400">
            <a href="{{ route('login') }}" class="text-white font-semibold hover:text-[#c4704b] transition">Kembali ke Login</a>
        </p>
    </div>
</x-guest-layout>

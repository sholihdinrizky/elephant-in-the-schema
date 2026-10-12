<x-guest-layout>
    <div class="bg-[#232320] rounded-2xl border border-white/10 p-8">
        <h1 class="font-serif text-2xl mb-1">Masuk ke Portal</h1>
        <p class="text-xs text-zinc-400 mb-6">Gunakan email dan password untuk mengakses dashboard proyek Agentic AI.</p>

        <!-- Quick fill for grader -->
        <div class="mb-6 p-3 rounded-xl bg-white/5 border border-white/10 flex items-center justify-between">
            <div>
                <div class="text-xs font-semibold text-white">Akun Demo Penguji</div>
                <div class="text-[10px] text-zinc-400 font-mono">dosenpbkk@its.ac.id</div>
            </div>
            <button type="button"
                    onclick="document.getElementById('email').value='dosenpbkk@its.ac.id'; document.getElementById('password').value='password';"
                    class="px-3 py-1.5 rounded-full bg-[#c4704b] hover:bg-[#d4805b] text-white text-[11px] font-semibold transition">
                Isi Otomatis
            </button>
        </div>

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf

            <div>
                <label for="email" class="block text-xs font-semibold text-zinc-300 mb-1">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username"
                       placeholder="nama@its.ac.id"
                       class="w-full px-4 py-2.5 rounded-lg bg-black/30 border border-white/10 text-white text-sm placeholder-zinc-500 focus:border-[#c4704b] focus:ring-1 focus:ring-[#c4704b] transition" />
                <x-input-error :messages="$errors->get('email')" class="mt-1 text-xs text-red-400" />
            </div>

            <div>
                <label for="password" class="block text-xs font-semibold text-zinc-300 mb-1">Password</label>
                <input id="password" type="password" name="password" required autocomplete="current-password"
                       placeholder="••••••••"
                       class="w-full px-4 py-2.5 rounded-lg bg-black/30 border border-white/10 text-white text-sm placeholder-zinc-500 focus:border-[#c4704b] focus:ring-1 focus:ring-[#c4704b] transition" />
                <x-input-error :messages="$errors->get('password')" class="mt-1 text-xs text-red-400" />
            </div>

            <div class="flex items-center justify-between">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded bg-black/30 border-white/20 text-[#c4704b] focus:ring-[#c4704b]" name="remember">
                    <span class="ms-2 text-xs text-zinc-400">Ingat saya</span>
                </label>
                @if (Route::has('password.request'))
                    <a class="text-xs text-zinc-400 hover:text-white transition" href="{{ route('password.request') }}">Lupa password?</a>
                @endif
            </div>

            <button type="submit" class="w-full py-3 rounded-full bg-white text-[#1b1b18] font-semibold text-sm hover:bg-zinc-200 transition">
                Log In
            </button>
        </form>

        <p class="mt-6 text-center text-xs text-zinc-400">
            Belum punya akun? <a href="{{ route('register') }}" class="text-white font-semibold hover:text-[#c4704b] transition">Daftar</a>
        </p>
    </div>
</x-guest-layout>

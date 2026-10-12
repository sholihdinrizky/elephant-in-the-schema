<x-guest-layout>
    <div class="bg-[#232320] rounded-2xl border border-white/10 p-8">
        <h1 class="font-serif text-2xl mb-1">Buat Akun Baru</h1>
        <p class="text-xs text-zinc-400 mb-6">Daftarkan akun untuk mengakses portal proyek Agentic AI.</p>

        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            <div>
                <label for="name" class="block text-xs font-semibold text-zinc-300 mb-1">Nama Lengkap</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name"
                       placeholder="Nama lengkap"
                       class="w-full px-4 py-2.5 rounded-lg bg-black/30 border border-white/10 text-white text-sm placeholder-zinc-500 focus:border-[#c4704b] focus:ring-1 focus:ring-[#c4704b] transition" />
                <x-input-error :messages="$errors->get('name')" class="mt-1 text-xs text-red-400" />
            </div>

            <div>
                <label for="email" class="block text-xs font-semibold text-zinc-300 mb-1">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username"
                       placeholder="nama@mhs.its.ac.id"
                       class="w-full px-4 py-2.5 rounded-lg bg-black/30 border border-white/10 text-white text-sm placeholder-zinc-500 focus:border-[#c4704b] focus:ring-1 focus:ring-[#c4704b] transition" />
                <x-input-error :messages="$errors->get('email')" class="mt-1 text-xs text-red-400" />
            </div>

            <div>
                <label for="password" class="block text-xs font-semibold text-zinc-300 mb-1">Password</label>
                <input id="password" type="password" name="password" required autocomplete="new-password"
                       placeholder="Minimal 8 karakter"
                       class="w-full px-4 py-2.5 rounded-lg bg-black/30 border border-white/10 text-white text-sm placeholder-zinc-500 focus:border-[#c4704b] focus:ring-1 focus:ring-[#c4704b] transition" />
                <x-input-error :messages="$errors->get('password')" class="mt-1 text-xs text-red-400" />
            </div>

            <div>
                <label for="password_confirmation" class="block text-xs font-semibold text-zinc-300 mb-1">Konfirmasi Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                       placeholder="Ulangi password"
                       class="w-full px-4 py-2.5 rounded-lg bg-black/30 border border-white/10 text-white text-sm placeholder-zinc-500 focus:border-[#c4704b] focus:ring-1 focus:ring-[#c4704b] transition" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1 text-xs text-red-400" />
            </div>

            <button type="submit" class="w-full py-3 rounded-full bg-white text-[#1b1b18] font-semibold text-sm hover:bg-zinc-200 transition">
                Daftar
            </button>
        </form>

        <p class="mt-6 text-center text-xs text-zinc-400">
            Sudah punya akun? <a href="{{ route('login') }}" class="text-white font-semibold hover:text-[#c4704b] transition">Masuk</a>
        </p>
    </div>
</x-guest-layout>

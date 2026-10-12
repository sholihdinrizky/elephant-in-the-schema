<nav x-data="{ open: false }" class="bg-[#1b1b18] border-b border-white/10">
    <div class="max-w-6xl mx-auto px-6">
        <div class="flex justify-between h-16">
            <div class="flex items-center gap-6">
                <a href="{{ route('dashboard') }}" class="text-xl font-bold tracking-tight">Portal<span class="text-[#c4704b]">.</span></a>
                <a href="{{ route('dashboard') }}" class="hidden sm:inline-flex text-sm {{ request()->routeIs('dashboard') ? 'text-white font-semibold' : 'text-zinc-400 hover:text-white' }} transition">
                    Dashboard
                </a>
            </div>

            <!-- Desktop user menu -->
            <div class="hidden sm:flex items-center gap-4">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center gap-2 text-sm text-zinc-300 hover:text-white transition">
                            <span>{{ Auth::user()->name }}</span>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')" class="text-zinc-300 hover:text-white hover:bg-white/10">
                            Profil
                        </x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="text-zinc-300 hover:text-white hover:bg-white/10">
                                Log Out
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Mobile hamburger -->
            <div class="flex items-center sm:hidden">
                <button @click="open = !open" class="text-zinc-400 hover:text-white transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': !open}" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        <path :class="{'hidden': !open, 'inline-flex': open}" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div :class="{'block': open, 'hidden': !open}" class="hidden sm:hidden border-t border-white/10 px-6 py-4 space-y-2">
        <a href="{{ route('dashboard') }}" class="block text-sm text-zinc-300">Dashboard</a>
        <a href="{{ route('profile.edit') }}" class="block text-sm text-zinc-300">Profil</a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="block text-sm text-zinc-300">Log Out</button>
        </form>
    </div>
</nav>

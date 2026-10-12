<x-app-layout>
    <x-slot name="header">
        <h2 class="font-serif text-2xl text-white">Profil</h2>
    </x-slot>

    <div class="py-8 max-w-6xl mx-auto px-6 space-y-6">
        <div class="bg-[#232320] rounded-2xl border border-white/10 p-6">
            <div class="max-w-xl">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <div class="bg-[#232320] rounded-2xl border border-white/10 p-6">
            <div class="max-w-xl">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <div class="bg-[#232320] rounded-2xl border border-white/10 p-6">
            <div class="max-w-xl">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</x-app-layout>

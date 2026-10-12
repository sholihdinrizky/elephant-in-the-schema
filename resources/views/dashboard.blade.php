<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard Proyek Agentic AI
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-4">
            @forelse ($projects as $project)
                <div class="bg-white shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-bold">{{ $project->judul }}</h3>
                    <p class="text-gray-600">
                        {{ $project->deskripsi ?? 'Belum ada deskripsi' }}
                    </p>
                    <span class="text-sm text-gray-500">
                        Tema agent: {{ $project->tema_agent }}
                    </span>
                </div>
            @empty
                <div class="bg-white shadow-sm sm:rounded-lg p-6">
                    Belum ada project.
                </div>
            @endforelse
        </div>
    </div>
</x-app-layout>
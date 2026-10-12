<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <span class="text-[#ff5533] text-[11px] font-bold uppercase tracking-widest">PORTAL MAHASISWA &bull; PBKK WEEK 6</span>
                <h2 class="font-serif text-3xl text-white font-normal mt-1">Dashboard Proyek Agentic AI</h2>
                <p class="text-xs text-zinc-400 mt-1">
                    Menampilkan project milik <strong class="text-white">{{ Auth::user()->name }}</strong> ({{ Auth::user()->email }}) &bull; Diurutkan berdasarkan tanggal terbaru.
                </p>
            </div>
            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-xs text-zinc-300">
                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                <span>User ID: #{{ Auth::id() }}</span>
            </div>
        </div>
    </x-slot>

    <div class="py-8 max-w-7xl mx-auto px-6 lg:px-10 space-y-8">

        <!-- Proposal Information Banner (The User's Agentic AI Project) -->
        <div class="bg-gradient-to-r from-[#20201e] to-[#181816] rounded-2xl border border-white/10 p-6 sm:p-8 shadow-xl">
            <div class="max-w-4xl space-y-4">
                <div class="inline-flex items-center gap-2 px-2.5 py-1 rounded-md bg-[#ff5533]/15 text-[#ff7a59] text-[11px] font-semibold border border-[#ff5533]/20">
                    RANCANGAN PROPOSAL PROYEK
                </div>
                
                <h3 class="font-serif text-2xl text-white font-normal leading-snug">
                    Personalized Agentic AI for Intelligent Job Discovery and Application Preparation
                </h3>

                <p class="text-xs sm:text-sm text-zinc-300 leading-relaxed font-light">
                    Sistem ini merupakan AI agent yang membantu pencari kerja dalam menemukan dan menentukan peluang pekerjaan yang paling sesuai dengan profil mereka. Pengguna memberikan informasi mengenai latar belakang pendidikan, keterampilan, pengalaman, proyek, dan preferensi karier, kemudian agent menganalisis berbagai lowongan pekerjaan dan membandingkannya dengan profil pengguna untuk menentukan tingkat relevansi dan prioritas setiap peluang. Agent selanjutnya mengidentifikasi kompetensi dan pengalaman pengguna yang paling relevan terhadap pekerjaan yang dipilih serta menyesuaikan materi lamaran agar lebih sesuai dengan kebutuhan posisi tersebut.
                </p>

                <div class="pt-2 border-t border-white/5 grid grid-cols-1 md:grid-cols-2 gap-3 text-xs text-zinc-400">
                    <div class="flex items-center gap-2">
                        <span class="text-[#ff5533]">✔</span>
                        <span>Otomatisasi pencarian &amp; seleksi lowongan manual</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-[#ff5533]">✔</span>
                        <span>Pencocokan relevansi profil dan tujuan karier</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-[#ff5533]">✔</span>
                        <span>Penyesuaian personal CV &amp; materi lamaran kerja</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-[#ff5533]">✔</span>
                        <span>Rekomendasi cerdas berbasis kompetensi pengguna</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Heading: Daftar Proyek Eloquent User -->
        <div>
            <div class="flex items-center justify-between mb-4">
                <div>
                    <h4 class="text-base font-semibold text-white">Daftar Proyek di Database</h4>
                    <p class="text-xs text-zinc-400">Kueri Eloquent: hanya memuat proyek dengan foreign key <code>user_id = {{ Auth::id() }}</code></p>
                </div>
                <span class="text-xs text-zinc-400 font-mono bg-white/5 px-2.5 py-1 rounded-md border border-white/10">
                    Total: {{ $projects->count() }} Proyek
                </span>
            </div>

            <!-- Project Cards Grid -->
            <div class="grid grid-cols-1 gap-5">
                @forelse ($projects as $project)
                    <div class="bg-[#1e1e1c] rounded-2xl border border-white/10 p-6 hover:border-white/20 transition duration-200">
                        <div class="flex flex-col sm:flex-row sm:items-start justify-between gap-4 mb-3">
                            <div>
                                <h5 class="text-lg font-semibold text-white tracking-tight">{{ $project->judul }}</h5>
                                <div class="text-[11px] text-zinc-500 font-mono mt-0.5">
                                    Project ID #{{ $project->id }} &bull; Dibuat {{ $project->created_at?->diffForHumans() ?? '-' }}
                                </div>
                            </div>
                            
                            @php
                                $tema = strtolower($project->tema_agent);
                                $badgeClass = match(true) {
                                    str_contains($tema, 'crew') => 'bg-purple-500/15 text-purple-300 border-purple-500/20',
                                    str_contains($tema, 'langchain') => 'bg-amber-500/15 text-amber-300 border-amber-500/20',
                                    str_contains($tema, 'ollama') => 'bg-blue-500/15 text-blue-300 border-blue-500/20',
                                    default => 'bg-[#ff5533]/15 text-[#ff7a59] border-[#ff5533]/20',
                                };
                            @endphp
                            <span class="self-start px-3 py-1 rounded-full text-xs font-semibold border {{ $badgeClass }}">
                                {{ $project->tema_agent }}
                            </span>
                        </div>

                        <p class="text-sm text-zinc-300 leading-relaxed mb-5 font-light">
                            {{ $project->deskripsi ?? 'Belum ada deskripsi untuk proyek ini.' }}
                        </p>

                        <!-- Encrypted API Key Section -->
                        <div class="p-3.5 rounded-xl bg-black/40 border border-white/5" x-data="{ show: false }">
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-zinc-500 font-mono flex items-center gap-1.5">
                                    <svg class="w-3.5 h-3.5 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                    </svg>
                                    api_key_secure (encrypted column)
                                </span>
                                <button @click="show = !show" type="button" class="text-[#ff5533] hover:text-[#ff7a59] transition font-semibold text-[11px]">
                                    <span x-text="show ? 'Sembunyikan' : 'Tampilkan Key'"></span>
                                </button>
                            </div>
                            <div class="mt-1.5 font-mono text-xs">
                                <span x-show="!show" class="text-zinc-500 tracking-wider">••••••••••••••••••••••••••••••••</span>
                                <span x-show="show" x-cloak class="text-amber-300 select-all break-all">{{ $project->api_key_secure }}</span>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="bg-[#1e1e1c] rounded-2xl border border-white/10 p-12 text-center">
                        <p class="text-zinc-400 text-sm">Belum ada data project untuk user ini.</p>
                    </div>
                @endforelse
            </div>
        </div>

    </div>
</x-app-layout>
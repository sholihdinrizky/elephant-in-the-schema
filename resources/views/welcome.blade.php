<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Portal · Personalized Agentic AI</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,400;0,6..72,500;1,6..72,400&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#121211] text-[#ededec] font-sans antialiased min-h-screen flex flex-col selection:bg-[#ff5533] selection:text-white">

        <!-- Top Navigation (Kinsta style) -->
        <header class="w-full border-b border-white/[0.08] bg-[#121211]/90 backdrop-blur sticky top-0 z-50">
            <div class="max-w-7xl mx-auto px-6 lg:px-10 h-20 flex items-center justify-between">
                
                <!-- Brand -->
                <div class="flex items-center gap-10">
                    <a href="/" class="text-2xl font-bold tracking-tight text-white flex items-center gap-1">
                        Portal<span class="text-[#ff5533]">.</span>
                    </a>

                    <!-- Nav links -->
                    <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-zinc-400">
                        <a href="#tujuan" class="hover:text-white transition">Agentic Concept</a>
                    </nav>
                </div>

                <!-- Right Actions -->
                <div class="flex items-center gap-5 text-sm">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="px-5 py-2.5 rounded-full bg-white text-[#121211] font-semibold text-xs hover:bg-zinc-200 transition">
                                Buka Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="text-zinc-300 hover:text-white transition font-medium">
                                Login
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="px-5 py-2.5 rounded-full bg-white text-[#121211] font-semibold text-xs hover:bg-zinc-200 transition">
                                    Daftar Akun
                                </a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </header>

        <!-- Hero Section -->
        <main class="flex-1 flex items-center py-12 lg:py-20">
            <div class="max-w-7xl mx-auto px-6 lg:px-10 grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center w-full">

                <!-- Left Column (Copy & Highlights) -->
                <div class="lg:col-span-7 space-y-7">
                    
                    <!-- Orange Eyebrow -->
                    <div class="inline-flex items-center gap-2">
                        <span class="text-[#ff5533] text-xs font-bold uppercase tracking-[0.2em]">
                            AGENTIC AI · CAREER DISCOVERY &amp; APPLICATION
                        </span>
                    </div>

                    <!-- Main Serif Headline -->
                    <h1 class="font-serif text-4xl sm:text-5xl lg:text-[3.5rem] leading-[1.12] text-white font-normal tracking-tight">
                        Personalized Agentic AI:<br>
                        Cari kerja tak harus jadi ujian mental
                    </h1>

                    <!-- Konsep Singkat -->
                    <p class="text-zinc-400 text-base leading-relaxed max-w-2xl font-light">
                        Daripada berjam-jam tenggelam dalam ratusan lowongan yang belum tentu cocok, serahkan kurasinya ke <strong class="text-white font-semibold">AI Agent</strong>. Sistem membedah kompetensi Anda secara semantik, menyaring peluang paling prospektif, dan mempersonalisasi berkas lamaran—agar Anda bisa fokus persiapan interview, bukan meratapi algoritma pencarian.
                    </p>

                    <!-- Feature Bullet Points with Icons -->
                    <div class="space-y-4 pt-2 text-sm text-zinc-300">
                        <div class="flex items-start gap-4">
                            <div class="w-6 h-6 rounded-full bg-[#ff5533]/15 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-3.5 h-3.5 text-[#ff5533]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.381z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span class="leading-relaxed"><strong class="text-white font-medium">Bebas Capek Kurasi Manual:</strong> Mengeliminasi sortir lowongan satu per satu lewat penelusuran agen cerdas otomatis.</span>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-6 h-6 rounded-full bg-[#ff5533]/15 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-3.5 h-3.5 text-[#ff5533]" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M5.5 16a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 16h-8z"/>
                                </svg>
                            </div>
                            <span class="leading-relaxed"><strong class="text-white font-medium">Pencocokan Presisi &amp; Semantik:</strong> Memetakan kompetensi dan portofolio nyata ke lowongan yang valid, bukan sekadar cocok-cocokan keyword.</span>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-6 h-6 rounded-full bg-[#ff5533]/15 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-3.5 h-3.5 text-[#ff5533]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span class="leading-relaxed"><strong class="text-white font-medium">Tailoring Berkas Tanpa Drama:</strong> Menyesuaikan sorotan CV dan materi lamaran secara adaptif agar langsung tepat sasaran di meja HRD.</span>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-6 h-6 rounded-full bg-[#ff5533]/15 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-3.5 h-3.5 text-[#ff5533]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span class="leading-relaxed"><strong class="text-white font-medium">Rekomendasi Berbasis Prioritas:</strong> Agen otonom memprioritaskan lowongan dengan probabilitas kecocokan tertinggi demi efisiensi langkah Anda.</span>
                        </div>
                    </div>

                    <!-- Call To Action Buttons -->
                    <div class="flex flex-wrap items-center gap-4 pt-3">
                        <a href="{{ route('login') }}" class="px-8 py-3.5 rounded-full bg-white text-[#121211] font-semibold text-sm hover:bg-zinc-200 transition shadow-lg shadow-white/5">
                            Masuk Portal
                        </a>
                        <a href="{{ route('register') }}" class="px-8 py-3.5 rounded-full bg-[#1b1b1a] border border-white/20 text-white font-semibold text-sm hover:bg-white/10 transition">
                            Daftar Akun Baru
                        </a>
                    </div>
                </div>

                <!-- Right Column (Kinsta-style Card Composition) -->
                <div class="lg:col-span-5 relative">
                    
                    <!-- Main Card Container -->
                    <div class="relative bg-gradient-to-b from-[#252522] to-[#1c1c1a] rounded-[2rem] border border-white/10 p-6 sm:p-8 shadow-2xl overflow-hidden min-h-[460px] flex flex-col justify-between">
                        
                        <!-- Ambient background glow -->
                        <div class="absolute -top-24 -right-24 w-72 h-72 bg-[#ff5533]/10 rounded-full blur-3xl pointer-events-none"></div>

                        <!-- Top Floating Card: Automatic Update Completed / Database Seeded -->
                        <div class="bg-[#f5f5f3] text-[#121211] rounded-2xl p-4 shadow-xl border border-zinc-200/80 mb-6 max-w-xs transition hover:scale-[1.02]">
                            <div class="flex items-center gap-2 text-[10px] font-bold uppercase tracking-wider text-zinc-500 mb-2">
                                <span class="w-3.5 h-3.5 rounded-full bg-emerald-500 text-white flex items-center justify-center text-[9px] font-black">✓</span>
                                DATABASE SYNCED &amp; SEEDED
                            </div>
                            <div class="flex items-center justify-around text-center pt-1">
                                <div>
                                    <div class="text-3xl font-extrabold tracking-tight">16</div>
                                    <div class="text-[11px] text-zinc-500 font-medium">users</div>
                                </div>
                                <div class="h-8 w-px bg-zinc-300"></div>
                                <div>
                                    <div class="text-3xl font-extrabold tracking-tight text-[#ff5533]">32</div>
                                    <div class="text-[11px] text-zinc-500 font-medium">projects</div>
                                </div>
                            </div>
                        </div>

                        <!-- Middle Floating Card: Agent Pipeline Active -->
                        <div class="bg-black/60 backdrop-blur-md rounded-2xl border border-white/15 p-4 shadow-lg mb-6">
                            <div class="flex items-center gap-2 text-[10px] font-bold uppercase tracking-wider text-zinc-400 mb-3">
                                <svg class="w-3.5 h-3.5 text-[#ff5533]" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                                </svg>
                                AGENTIC WORKFLOW PIPELINE
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="px-2.5 py-1 rounded-md bg-[#ff5533]/20 text-[#ff7a59] text-[11px] font-medium border border-[#ff5533]/30">Job Analyzer</span>
                                <span class="px-2.5 py-1 rounded-md bg-purple-500/20 text-purple-300 text-[11px] font-medium border border-purple-500/30">CrewAI</span>
                                <span class="px-2.5 py-1 rounded-md bg-blue-500/20 text-blue-300 text-[11px] font-medium border border-blue-500/30">Ollama</span>
                            </div>
                        </div>

                        <!-- Project Banner Preview -->
                        <div class="bg-black/40 rounded-xl p-4 border border-white/10">
                            <div class="text-[11px] text-[#ff5533] font-semibold uppercase tracking-wider mb-1">PROPOSAL UNGGULAN</div>
                            <div class="text-xs font-semibold text-white truncate">Personalized Agentic AI for Intelligent Job Discovery</div>
                            <div class="text-[11px] text-zinc-400 mt-1 line-clamp-2">
                                Career application agent yang membantu pengguna mengambil keputusan pekerjaan &amp; lamaran personal.
                            </div>
                        </div>

                        <!-- Floating Helper Toast (bottom right of card) -->
                        <div class="mt-4 bg-white text-[#121211] rounded-xl p-3 shadow-2xl flex items-center justify-between border border-zinc-200">
                            <div>
                                <div class="text-[10px] font-bold uppercase tracking-wider text-zinc-500">Akun Penguji Siap Pakai</div>
                                <div class="text-xs font-mono font-semibold text-[#121211]">dosenpbkk@its.ac.id</div>
                            </div>
                            <a href="{{ route('login') }}" class="px-3 py-1.5 rounded-lg bg-[#ff5533] hover:bg-[#e04a2b] text-white text-[11px] font-bold transition">
                                Login Demo
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </main>

        <!-- Brief Explanatory Section for Assignment Requirements -->
        <section id="tujuan" class="border-t border-white/[0.08] bg-[#171716] py-16">
            <div class="max-w-7xl mx-auto px-6 lg:px-10">
                <div class="max-w-2xl mb-10">
                    <span class="text-[#ff5533] text-xs font-bold uppercase tracking-widest">RINGKASAN PROPOSAL</span>
                    <h2 class="font-serif text-3xl text-white font-normal mt-2">Personalized Agentic AI for Intelligent Job Discovery and Application Preparation</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-[#20201e] rounded-xl p-6 border border-white/10">
                        <div class="text-2xl font-serif text-[#ff5533] mb-3">01</div>
                        <h3 class="text-sm font-semibold text-white mb-2">Automated Job Discovery</h3>
                        <p class="text-xs text-zinc-400 leading-relaxed">
                            Mengurangi proses pencarian dan seleksi lowongan yang dilakukan secara manual dengan analisis relevansi real-time.
                        </p>
                    </div>

                    <div class="bg-[#20201e] rounded-xl p-6 border border-white/10">
                        <div class="text-2xl font-serif text-[#ff5533] mb-3">02</div>
                        <h3 class="text-sm font-semibold text-white mb-2">Competency Matching</h3>
                        <p class="text-xs text-zinc-400 leading-relaxed">
                            Membantu pengguna menemukan pekerjaan yang paling relevan dengan profil, latar belakang, dan tujuan kariernya.
                        </p>
                    </div>

                    <div class="bg-[#20201e] rounded-xl p-6 border border-white/10">
                        <div class="text-2xl font-serif text-[#ff5533] mb-3">03</div>
                        <h3 class="text-sm font-semibold text-white mb-2">Application Tailoring</h3>
                        <p class="text-xs text-zinc-400 leading-relaxed">
                            Menyesuaikan CV dan materi lamaran kerja berdasarkan karakteristik serta persyaratan setiap posisi lowongan.
                        </p>
                    </div>

                    <div class="bg-[#20201e] rounded-xl p-6 border border-white/10">
                        <div class="text-2xl font-serif text-[#ff5533] mb-3">04</div>
                        <h3 class="text-sm font-semibold text-white mb-2">Personal Recommendations</h3>
                        <p class="text-xs text-zinc-400 leading-relaxed">
                            Memberikan rekomendasi yang personal dan terarah dibandingkan sistem pencarian pekerjaan berbasis keyword biasa.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="border-t border-white/[0.08] py-8 text-center text-xs text-zinc-500 bg-[#121211]">
            <div class="max-w-7xl mx-auto px-6 flex flex-col sm:flex-row items-center justify-between gap-4">
                <div class="flex items-center gap-2">
                    <span class="font-bold text-white">Portal<span class="text-[#ff5533]">.</span></span>
                    <span>· Secure Academic Portal</span>
                </div>
                <div>
                    Pemrograman Berbasis Kerangka Kerja (PBKK) · Kelas B · ITS
                </div>
            </div>
        </footer>

    </body>
</html>

<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        fake()->seed(123);
        app(Generator::class)->seed(123);

        // 1. Akun demo penguji
        $dosen = User::updateOrCreate(
            ['email' => 'dosenpbkk@its.ac.id'],
            [
                'name' => 'Dosen PBKK',
                'password' => Hash::make('password'),
            ]
        );

        // Hapus proyek lama akun demo jika ada agar tidak duplikasi saat re-seed
        $dosen->projects()->delete();

        // 2 Proyek utama milik Dosen / Demo User
        $dosen->projects()->createMany([
            [
                'judul' => 'Personalized Agentic AI for Intelligent Job Discovery and Application Preparation',
                'deskripsi' => 'Sistem ini merupakan AI agent yang membantu pencari kerja dalam menemukan dan menentukan peluang pekerjaan yang paling sesuai dengan profil mereka. Pengguna memberikan informasi mengenai latar belakang pendidikan, keterampilan, pengalaman, proyek, dan preferensi karier, kemudian agent menganalisis berbagai lowongan pekerjaan dan membandingkannya dengan profil pengguna untuk menentukan tingkat relevansi dan prioritas setiap peluang. Agent selanjutnya mengidentifikasi kompetensi dan pengalaman pengguna yang paling relevan terhadap pekerjaan yang dipilih serta menyesuaikan materi lamaran agar lebih sesuai dengan kebutuhan posisi tersebut.',
                'tema_agent' => 'CrewAI',
                'api_key_secure' => 'sk-agentic-job-discovery-demo-key-2026',
            ],
            [
                'judul' => 'Automated Career Application & Resume Tailoring Agent',
                'deskripsi' => 'Agent pendukung untuk otomatisasi penyesuaian CV dan materi lamaran berdasarkan karakteristik lowongan pekerjaan yang dipilih secara personal dan kontekstual.',
                'tema_agent' => 'Ollama',
                'api_key_secure' => 'ollama-local-career-agent-key-002',
            ],
        ]);

        // 2. 15 user acak mahasiswa ITS, masing-masing memiliki 2 project dummy
        // Hanya generate jika user lain belum ada untuk mencegah duplikasi jika di-run berulang kali
        $existingCount = User::where('email', '!=', 'dosenpbkk@its.ac.id')->count();
        if ($existingCount < 15) {
            $needed = 15 - $existingCount;
            User::factory($needed)
                ->has(Project::factory()->count(2))
                ->create();
        }
    }
}

<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'judul' => fake()->randomElement([
                'Agent Asisten Perwalian Mahasiswa',
                'Multi-Agent Sistem Rekomendasi Mata Kuliah',
                'Agent Pendeteksi Plagiarisme Kode Tugas',
                'Agentic RAG untuk Tanya Jawab Materi Kuliah',
                'Agent Pemantau Progres Proyek Kelompok',
            ]),
            'deskripsi' => fake()->optional(0.8)->paragraph(3),
            'tema_agent' => fake()->randomElement(['Ollama', 'LangChain', 'AutoGen', 'CrewAI']),
            'api_key_secure' => 'sk-'.fake()->regexify('[A-Za-z0-9]{32}'),
        ];
    }
}

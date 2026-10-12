<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {

        fake()->seed(123);
        app(Generator::class)->seed(123);
        // Akun demo penguji
        $dosen = User::updateOrCreate(
            ['email' => 'dosenpbkk@its.ac.id'],
            ['name' => 'Dosen PBKK', 'password' => Hash::make('password')]
        );

        $dosen->projects()->createMany([
            [
                'judul' => 'Agent Asisten Dosen Otomatis',
                'deskripsi' => 'Agent untuk koreksi tugas dan umpan balik awal.',
                'tema_agent' => 'Ollama',
                'api_key_secure' => 'demo-key-001',
            ],
            [
                'judul' => 'Multi-Agent Penjadwal Kuliah',
                'deskripsi' => 'Beberapa agent menyusun jadwal tanpa bentrok.',
                'tema_agent' => 'CrewAI',
                'api_key_secure' => 'demo-key-002',
            ],
        ]);

        // 15 user acak, masing-masing 2 project
        User::factory(15)
            ->has(Project::factory()->count(2))
            ->create();
    }
}

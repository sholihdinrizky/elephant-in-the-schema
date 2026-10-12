<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Rancangan proposal proyek Agentic AI milik mahasiswa.
 */
class Project extends Model
{
    use HasFactory;

    /**
     * Kolom yang boleh diisi lewat mass assignment.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'judul',
        'deskripsi',
        'tema_agent',
        'api_key_secure',
        'user_id',
    ];

    /**
     * Kolom yang disembunyikan saat model diubah ke array/JSON.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'api_key_secure',
    ];

    /**
     * Enkripsi otomatis API key sebelum disimpan ke database.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'api_key_secure' => 'encrypted',
        ];
    }

    /**
     * Pemilik proyek.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

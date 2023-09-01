<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';

    public function laporan_kegiatan(): HasMany
    {
        return $this->hasMany(laporan_kegiatan::class, 'siswa_id');
    }
    public function nilai(): HasMany
    {
        return $this->hasMany(nilai::class, 'app\http\Models\nilai');
    }
}

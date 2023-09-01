<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class laporan_kegiatan extends Model
{
    use HasFactory;
    protected $table = 'laporan_kegiatan';

    public function siswa(): BelongsTo{
        return $this->belongsTo(laporan_kegiatan::class, 'laporan_kegiatan_id');
    }
}


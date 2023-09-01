<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class nilai extends Model
{
    use HasFactory;
    protected $table = 'nilai';

    public function siswa(): BelongsTo
    {
        return $this->belongsTo(siswa::class, 'app\http\Models\siswa');
    }
}

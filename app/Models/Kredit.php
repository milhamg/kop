<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Kredit extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal_pinjam',
        'jangka_waktu',
        'jumlah',
        'jumlah_ansuran',
        'anggota_id',
        'validasi',
        'authorisasi'
    ];

    protected $with = ['anggota'];

    public function anggota(): BelongsTo
    {
        return $this->belongsTo(Anggota::class);
    }
}

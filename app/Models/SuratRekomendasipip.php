<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratRekomendasipip extends Model
{
    use HasFactory;

    protected $fillable = [
        'siswa_id',
        'tanggal',
        'isi_surat',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratTugas extends Model
{
    use HasFactory;

    protected $fillable = ['hari', 'tanggal', 'waktu', 'tempat'];

    public function siswa()
    {
        return $this->belongsToMany(Siswa::class, 'surat_tugas_siswa');
    }
}

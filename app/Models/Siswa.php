<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nis',
        'kelas',
        'email',
        'telepon',
        'nisn',
        'tempat_lahir',
         'tanggal_lahir',
          'alamat'
    ];

    public function suratTugas()
    {
        return $this->belongsToMany(SuratTugas::class, 'surat_tugas_siswa');
    }
}

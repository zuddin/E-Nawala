<?php

namespace App\Imports;

use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\ToModel;

class SiswaImport implements ToModel
{
    public function model(array $row)
    {
        return new Siswa([
            'nama' => $row[0],
            'nis' => $row[1],
            'nisn' => $row[2],
            'tempat_lahir' => $row[3],
            'tanggal_lahir' => $row[4],
            'alamat' => $row[5],
            'kelas' => $row[6],
            'email' => $row[7],
            'telepon' => $row[8],
        ]);
    }
}


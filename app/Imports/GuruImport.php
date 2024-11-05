<?php

namespace App\Imports;

use App\Models\Guru;
use Maatwebsite\Excel\Concerns\ToModel;

class GuruImport implements ToModel
{
    public function model(array $row)
    {
        return new Guru([
            'nama' => $row[0],
            'nip' => $row[1],
            'mata_pelajaran' => $row[2],
            'email' => $row[3],
            'telepon' => $row[4],
        ]);
    }
}


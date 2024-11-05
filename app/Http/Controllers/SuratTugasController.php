<?php

namespace App\Http\Controllers;
use App\Models\Siswa;
use App\Models\SuratTugas;
use Illuminate\Http\Request;

class SuratTugasController extends Controller
{
    public function create()
    {
        $siswa = Siswa::all();
        return view('surat_tugas.create', compact('siswa'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'hari' => 'required',
            'tanggal' => 'required|date',
            'waktu' => 'required',
            'tempat' => 'required',
            'siswa' => 'required|array|min:1'  // Siswa harus diisi dan minimal 1
        ]);

        // Buat surat tugas baru
        $suratTugas = SuratTugas::create($validatedData);

        // Menyimpan relasi antara surat tugas dan siswa yang dipilih
        $suratTugas->siswa()->sync($request->siswa);

        return redirect()->route('surat-tugas.index')->with('success', 'Surat tugas berhasil dibuat.');
    }
}

<?php
namespace App\Http\Controllers;

use App\Models\SuratRekomendasipip;
use App\Models\Siswa;
use Illuminate\Http\Request;
use PDF; // Tambahkan ini di bagian atas file

class SuratRekomendasipipController extends Controller
{
    public function index()
    {
        $SuratRekomendasipip = SuratRekomendasipip::with('siswa')->get();
        return view('surat_rekomendasipip.index', compact('SuratRekomendasipip'));
    }

    public function create()
    {
        $siswas = Siswa::all();
        return view('surat_rekomendasipip.create', compact('siswas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'siswa_id' => 'required|exists:siswas,id',
            'tanggal' => 'required|date',
            'isi_surat' => 'required',
        ]);

        SuratRekomendasipip::create($request->all());

        return redirect()->route('surat_rekomendasipip.index')->with('success', 'Surat rekomendasi berhasil ditambahkan.');
    }

    public function edit(SuratRekomendasipip $SuratRekomendasipip)
    {
        $siswas = Siswa::all();
        return view('surat_rekomendasipip.edit', compact('SuratRekomendasipip', 'siswas'));
    }

    public function update(Request $request, SuratRekomendasipip $SuratRekomendasipip)
    {
        $request->validate([
            'siswa_id' => 'required|exists:siswas,id',
            'tanggal' => 'required|date',
            'isi_surat' => 'required',
        ]);

        $SuratRekomendasipip->update($request->all());

        return redirect()->route('surat_rekomendasipip.index')->with('success', 'Surat rekomendasi berhasil diubah.');
    }

    public function destroy(SuratRekomendasipip $SuratRekomendasipip)
    {
        $SuratRekomendasipip->delete();

        return redirect()->route('surat_rekomendasipip.index')->with('success', 'Surat rekomendasi berhasil dihapus.');
    }
    // Fungsi untuk mencetak surat rekomendasi
    public function print(SuratRekomendasipip $suratRekomendasipip)
    {
        $pdf = PDF::loadView('surat_rekomendasipip.pdf', compact('suratRekomendasipip'));
        return $pdf->stream('surat_rekomendasi_' . $suratRekomendasipip->id . '.pdf');
    }
}

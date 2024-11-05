<?php
namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Siswa;
use App\Models\SuratRekomendasipip;

class DashboardController extends Controller
{
    public function index()
    {
        $totalGuru = Guru::count();
        $totalSiswa = Siswa::count();
        $totalSuratRekomendasipip = SuratRekomendasipip::count();
        $latestSurat = SuratRekomendasipip::latest()->take(5)->get();

        return view('dashboard', compact('totalGuru', 'totalSiswa', 'totalSuratRekomendasipip', 'latestSurat'));
    }
}

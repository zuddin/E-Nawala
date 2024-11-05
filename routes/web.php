<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SuratRekomendasipipController;
use App\Http\Controllers\SuratTugasController;
use App\Http\Controllers\DashboardController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::resource('guru', GuruController::class);
// Rute untuk import data
Route::post('guru.import', [GuruController::class, 'import'])->name('guru.import');

Route::resource('siswa', SiswaController::class);
// Rute untuk import data
Route::post('siswa/import', [SiswaController::class, 'import'])->name('siswa.import');
Route::get('siswa/search', [SiswaController::class, 'search'])->name('siswa.search');




Route::resource('surat_rekomendasipip', SuratRekomendasipipController::class);
Route::get('surat_rekomendasipip/{suratRekomendasipip}/print', [SuratRekomendasipipController::class, 'print'])->name('surat_rekomendasipip.print');

Route::get('/surat-tugas/create', [SuratTugasController::class, 'create'])->name('surat-tugas.create');
Route::post('/surat-tugas/store', [SuratTugasController::class, 'store'])->name('surat-tugas.store');

Route::get('/siswa/data', [SiswaController::class, 'getData'])->name('siswa.data');


Route::get('/', function () {
    return redirect()->route('login');
});

Route::resource('guru', GuruController::class)->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

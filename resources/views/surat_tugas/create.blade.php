@extends('adminlte::page')

@section('title', 'Buat Surat Tugas')

@section('content_header')
    <h1>Buat Surat Tugas</h1>
@stop

@section('content')
<div class="container">
    <form action="{{ route('surat-tugas.store') }}" method="POST" id="suratTugasForm">
        @csrf

        <div class="form-group">
            <label for="hari">Hari</label>
            <input type="text" class="form-control" id="hari" name="hari" required>
        </div>

        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
        </div>

        <div class="form-group">
            <label for="waktu">Waktu</label>
            <input type="time" class="form-control" id="waktu" name="waktu" required>
        </div>

        <div class="form-group">
            <label for="tempat">Tempat</label>
            <input type="text" class="form-control" id="tempat" name="tempat" required>
        </div>

        <!-- Dynamic Siswa Input -->
        <div id="siswaContainer">
            <label for="siswa">Pilih Siswa</label>
            <div class="input-group mb-3 siswa-entry">
                <select class="form-control siswa-select" name="siswa[]" required>
                    <option value="">-- Pilih Siswa --</option>
                    @foreach($siswa as $s)
                        <option value="{{ $s->id }}">{{ $s->nama }} - {{ $s->kelas }}</option>
                    @endforeach
                </select>
                <div class="input-group-append">
                    <button type="button" class="btn btn-danger removeSiswa">Hapus</button>
                </div>
            </div>
        </div>

        <button type="button" class="btn btn-secondary mt-2" id="addSiswa">Tambah Siswa</button>

        <button type="submit" class="btn btn-primary mt-3">Buat Surat Tugas</button>
    </form>
</div>

<!-- JQuery untuk penambahan dan penghapusan input siswa -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // Menambah select baru untuk siswa
    $('#addSiswa').on('click', function() {
        var siswaEntry = `
            <div class="input-group mb-3 siswa-entry">
                <select class="form-control siswa-select" name="siswa[]" required>
                    <option value="">-- Pilih Siswa --</option>
                    @foreach($siswa as $s)
                        <option value="{{ $s->id }}">{{ $s->nama }} - {{ $s->kelas }}</option>
                    @endforeach
                </select>
                <div class="input-group-append">
                    <button type="button" class="btn btn-danger removeSiswa">Hapus</button>
                </div>
            </div>
        `;

        $('#siswaContainer').append(siswaEntry);
    });

    // Menghapus select siswa
    $(document).on('click', '.removeSiswa', function() {
        $(this).closest('.siswa-entry').remove();
    });
});
</script>
@stop

@extends('adminlte::page')

@section('title', 'Tambah Surat Rekomendasi PIP')

@section('content_header')
    <h1>Tambah Surat Rekomendasi PIP</h1>
@stop

@section('content')
    <form action="{{ route('surat_rekomendasipip.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="siswa_id">Siswa</label>
            <select name="siswa_id" class="form-control" required>
                <option value="">Pilih Siswa</option>
                @foreach($siswas as $siswa)
                    <option value="{{ $siswa->id }}">{{ $siswa->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="isi_surat">Cabang Olahraga</label>
            <textarea name="isi_surat" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@stop

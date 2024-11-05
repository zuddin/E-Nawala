@extends('adminlte::page')

@section('title', 'Surat Rekomendasi')

@section('content_header')
    <h1>Surat Rekomendasi</h1>
@stop

@section('content')
    <a href="{{ route('surat_rekomendasipip.create') }}" class="btn btn-success mb-3">Tambah Surat Rekomendasi</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Siswa</th>
                <th>Tanggal</th>
                <th>Isi Surat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($SuratRekomendasipip as $surat)
                <tr>
                    <td>{{ $surat->siswa->nama }}</td>
                    <td>{{ $surat->tanggal }}</td>
                    <td>{{ $surat->isi_surat }}</td>
                    <td>
                        <a href="{{ route('surat_rekomendasipip.edit', $surat->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('surat_rekomendasipip.destroy', $surat->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>

                        </form>
                        <a href="{{ route('surat_rekomendasipip.print', $surat->id) }}" class="btn btn-warning">Cetak PDF</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

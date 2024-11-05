@extends('adminlte::page')

@section('title', 'Data Guru')

@section('content_header')
    <h1>Data Guru</h1>
@stop

@section('content')
    <a href="{{ route('guru.create') }}" class="btn btn-success mb-3">Tambah Guru</a>
    
    <!-- Form Import Excel -->
    <form action="{{ route('guru.import') }}" method="POST" enctype="multipart/form-data" class="mb-3">
        @csrf
        <div class="form-group">
            <label for="file">Import Data Guru (Excel)</label>
            <input type="file" name="file" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Import Data</button>
    </form>
    
    <!-- Tabel Data Guru -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIP</th>
                <th>Mata Pelajaran</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($gurus as $guru)
                <tr>
                    <td>{{ $guru->nama }}</td>
                    <td>{{ $guru->nip }}</td>
                    <td>{{ $guru->mata_pelajaran }}</td>
                    <td>{{ $guru->email }}</td>
                    <td>{{ $guru->telepon }}</td>
                    <td>
                        <a href="{{ route('guru.edit', $guru->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('guru.destroy', $guru->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

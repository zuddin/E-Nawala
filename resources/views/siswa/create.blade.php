@extends('adminlte::page')

@section('title', 'Tambah Siswa')

@section('content_header')
    <h1>Tambah Siswa</h1>
@stop

@section('content')
    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Mama Siswa</label>
            <input type="text" name="nama" class="form-control" required>

        </div>

        <div class="form-group">
            <label for="nis">NIS</label>
            <input type="text" name="nis" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nis">NISN</label>
            <input type="text" name="nisn" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="kelas">Kelas</label>
            <input type="text" name="kelas" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="telepon">Telepon</label>
            <input type="text" name="telepon" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    <script>
$(document).ready(function() {
    $('#siswa_id').select2({
        ajax: {
            url: '{{ route("siswa.search") }}', // Ganti dengan rute pencarian siswa yang akan kita buat
            dataType: 'json',
            delay: 250,
            data: function(params) {
                return {
                    q: params.term // Mencari berdasarkan term yang dimasukkan
                };
            },
            processResults: function(data) {
                return {
                    results: $.map(data, function(item) {
                        return {
                            id: item.id,
                            text: item.nama // Sesuaikan dengan nama kolom yang ada di tabel siswa
                        };
                    })
                };
            },
            cache: true
        },
        minimumInputLength: 1, // Minimal karakter yang dimasukkan sebelum pencarian dilakukan
    });
});
</script>

@stop

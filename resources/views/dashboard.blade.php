@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>
    Dashboard
    <small>Informasi Sistem</small>
  </h1>
@stop

@section('content')
<div class="row">
    <!-- Guru Count -->
    <div class="col-lg-4 col-xs-6">
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>{{ $totalGuru }}</h3>
          <p>Total Guru</p>
        </div>
        <div class="icon">
          <i class="fa fa-users"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- Siswa Count -->
    <div class="col-lg-4 col-xs-6">
      <div class="small-box bg-green">
        <div class="inner">
          <h3>{{ $totalSiswa }}</h3>
          <p>Total Siswa</p>
        </div>
        <div class="icon">
          <i class="fa fa-user"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- Surat Rekomendasi Count -->
    <div class="col-lg-4 col-xs-6">
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>{{ $totalSuratRekomendasipip }}</h3>
          <p>Total Surat Rekomendasi</p>
        </div>
        <div class="icon">
          <i class="fa fa-envelope"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>

  <!-- Tabel Surat Rekomendasi Terbaru -->
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Surat Rekomendasi Terbaru</h3>
        </div>
        <div class="box-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Tanggal Surat</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              @foreach($latestSurat as $surat)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $surat->siswa->nama }}</td>
                <td>{{ $surat->tanggal }}</td>
                <td>{{ $surat->status }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Grafik Siswa (Chart.js) -->
  <div class="row">
    <div class="col-md-6">
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Distribusi Siswa per Kelas</h3>
        </div>
        <div class="box-body">
          <canvas id="siswaChart"></canvas>
        </div>
      </div>
    </div>
  </div>


<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('siswaChart').getContext('2d');
    var siswaChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Kelas 10', 'Kelas 11', 'Kelas 12'], // Label kelas
            datasets: [{
                label: 'Jumlah Siswa',
                data: [30, 45, 40], // Data siswa per kelas
                backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)'],
                borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)'],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@stop

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Rekomendasi PIP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
        }
        .content {
            margin-top: 30px;
        }
    </style>
</head>
<body>
<center>

<table cellpadding="0" cellspacing="0" border="0">
<tr>
    <td ><img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('kop.png'))) }}" style="width: 700px;"></td>
    <!-- <td cellpadding="0" cellspacing="0" style='padding-left:10px'><center><b>KEMENTERIAN AGAMA REPUBLIK INDONESIA</b></center></td>
    -->
</tr>
  
  <!-- <tr>
    <td cellpadding="0" cellspacing="0"><center><b>KANTOR KEMENTERIAN AGAMA KOTA PEKALONGAN</b></center></td>
  </tr>
  <tr>
    <td cellpadding="0" cellspacing="0"><center><b>MADRASAH ALIYAH NEGERI 2</b></center></td>
  </tr>
  <tr>
    <td cellpadding="0" cellspacing="0"><center>Jalan Trikora Pragak Yosorejo Pekalongan  Kode Pos 51137</center></td>
  </tr>
  <tr style="border-bottom:1pt solid black; " class="spacer">
    <td cellpadding="0" cellspacing="0"><center>Telp (0285)429205; Fax (0285) 429205 Web : www.man2kotapekalongan.sch.id</center></td>
  </tr>
   -->
  <tr class="spacer">
    <td><center><p style="margin-top: 40px; padding-top:0; margin-bottom: 0;"><u><b>SURAT KETERANGAN</b></u></p></center></td>
  </tr>
  
  

  <tr height="50" valign="top">
    <td><center><p style="padding-top:0; margin-top: 0; margin-bottom: 0;">Nomor : 421.3 / </p></center></td>
  </tr>
  <tr height="40" valign="top">
    <td align="justify"><p style="margin-left:50px; margin-right: 30px; margin-top: 40px; padding-top:0;">Kepala SMA Negeri 2 Pekalongan, dengan ini menerangkan nama tersebut dibawah ini :</p></td>
  </tr>
  <tr>
    <td>
      <center>

        <table>
          <tr>
            <td  width="300px"><p style="margin-left:120px;  margin-bottom:0; ">Nama</p></td>
            <td><p style=" margin-bottom:0; text-transform: capitalize; ">: <b> {{ $suratRekomendasipip->siswa->nama }}</b></p></td>
          </tr>
          <tr>
            <td  width="300px"><p style="margin-left:120px; margin-top: 0; margin-bottom:0; padding-top:0;">Kelas</p></td>
            <td><p style=" margin-top: 0;margin-bottom:0; padding-top:0;">: <b> {{ $suratRekomendasipip->siswa->kelas }} </b></p></td>
          </tr>
          <tr>
            <td  width="300px"><p style="margin-left:120px; margin-top: 0; margin-bottom:0; padding-top:0;">NIS / NISN</p></td>
            <td><p style=" margin-top: 0;margin-bottom:0; padding-top:0;">: <b> {{ $suratRekomendasipip->siswa->nis }} / {{ $suratRekomendasipip->siswa->nisn }}  </b></p></td>
          </tr>
          <tr>
            <td  width="180px"><p style="margin-left:120px; margin-top: 0; margin-bottom:0; padding-top:0;">Tempat, Tanggal Lahir</p></td>
            <td><p style=" margin-top: 0;margin-bottom:0; padding-top:0; text-transform: capitalize;">: <b> {{ $suratRekomendasipip->siswa->tempat_lahir }}, {{ \Carbon\Carbon::parse($suratRekomendasipip->siswa->tanggal_lahir)->locale('id')->translatedFormat('d F Y') }}
           </b></p></td>
          </tr>
          <tr>
            <td  width="180px"><p style="margin-left:120px; margin-top: 0; margin-bottom:0; padding-top:0;">Alamat</p></td>
            <td><p style=" margin-top: 0;margin-bottom:0; padding-top:0; text-transform: capitalize;">: <b> {{ $suratRekomendasipip->siswa->alamat }}</b></p></td>
          </tr>
          

          

         


        </table>
      </center>
    </td>
  </tr>
  <tr height="80" >
    <td  align="justify"><p style="margin-left:50px; margin-right: 30px; margin-top: 40px; margin-bottom:0; padding-top:0;">Adalah benar-benar siswa SMA Negeri 2 Pekalongan Tahun Pelajaran 2024/2025.</p></td>
  </tr>
  <tr height="40" valign="middle">
    <td  align="justify"><p style="margin-left:50px; margin-right: 30px; margin-top: 10px; margin-bottom:0; padding-top:0;">Surat keterangan ini digunakan untuk persyaratan mengikuti POPDA cabang olahraga {{ $suratRekomendasipip->isi_surat }} .</p></td>
  </tr>
  <tr height="40" valign="middle">
    <td  align="justify"><p style="margin-left:50px; margin-right: 30px; margin-top: 10px; margin-bottom:50; padding-top:0;">Demikian surat keterangan ini kami buat agar dapat dipergunakan sebagaimana mestinya.</p></td>
  </tr>
  

  <tr>
    <td> <p style="margin-left:360px; margin-right: 30px; margin-top: 70px; margin-bottom:0; padding-top:0;">
      Pekalongan, {{ \Carbon\Carbon::parse($suratRekomendasipip->tanggal)->locale('id')->translatedFormat('d F Y') }}

      </p>
    </td>
  </tr>
  <tr>
    <td>
      <p style="margin-left:360px; margin-right: 30px; margin-top: 0px; margin-bottom:0; padding-top:0;">Kepala Sekolah</p>
    </td>
  </tr>
  <tr>
    <td>
     
    </td>
  </tr>
  <tr>
    <td>
      <p style="margin-left:360px; margin-right: 30px; margin-top: 80px; margin-bottom:0; padding-top:0;"><b>Fauziah Ratna Hapsari, S.Pd., M.Pd.</b></p>
    </td>
  </tr>
  <tr>
    <td>
      <p style="margin-left:360px; margin-right: 30px; margin-top: 0px; margin-bottom:0; padding-top:0;">NIP. 19770414 200801 2 007</p>
    </td>
  </tr>

</table>

</body>
</html>

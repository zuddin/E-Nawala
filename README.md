# E-Nawala

**E-Nawala** adalah sebuah aplikasi berbasis web untuk mengelola administrasi surat di lingkungan sekolah, dikembangkan menggunakan **Laravel** dan **AdminLTE**. Aplikasi ini menyediakan fitur manajemen data guru, data siswa, surat tugas, surat rekomendasi PIP, dan berbagai jenis surat lainnya yang terintegrasi dengan tabel data siswa.

## Daftar Isi

- [Fitur](#fitur)
- [Prasyarat](#prasyarat)
- [Instalasi](#instalasi)
- [Konfigurasi](#konfigurasi)
- [Penggunaan](#penggunaan)
- [Kontribusi](#kontribusi)
- [Lisensi](#lisensi)

## Fitur

- Manajemen data siswa dan guru (CRUD).
- Pembuatan surat tugas untuk siswa, termasuk pilihan siswa dengan multiple select.
- Pembuatan surat rekomendasi PIP yang terhubung dengan data siswa.
- Cetak surat dalam format PDF.
- Dashboard informatif untuk tampilan data ringkasan.

## Prasyarat

Pastikan Anda telah menginstal perangkat berikut sebelum menjalankan aplikasi:

- **PHP** >= 8.1
- **Composer**
- **Node.js** dan **NPM**
- **MySQL** atau database lain yang kompatibel dengan Laravel

## Instalasi

1. **Clone Repository**
   
   ```bash
   git clone https://github.com/zuddin/E-Nawala.git
   cd E-Nawala

2. **Instal Dependensi**
Setelah meng-clone repository, Anda perlu menginstal semua dependensi PHP dan JavaScript yang diperlukan untuk menjalankan aplikasi. Berikut adalah langkah-langkahnya:

### 1. **Instal Dependensi PHP** menggunakan Composer:
    ```bash
    composer install
    ```

### 2. **Instal Dependensi JavaScript** menggunakan npm:
    ```bash
    npm install
    ```

### 3. **Compile Asset** menggunakan Laravel Mix:
    ```bash
    npm run dev
    ```
3. **Konfigurasi Environment**
Setelah menginstal dependensi, langkah selanjutnya adalah mengonfigurasi file environment untuk aplikasi.

### 1. **Salin file `.env.example`** menjadi `.env`:
    ```bash
    cp .env.example .env
    ```

### 2. **Edit file `.env`** untuk mengatur pengaturan database dan konfigurasi lainnya. Buka file `.env` menggunakan teks editor dan sesuaikan pengaturan berikut:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nama_database
    DB_USERNAME=user_database
    DB_PASSWORD=password_database
    ```

   Gantilah `nama_database`, `user_database`, dan `password_database` sesuai dengan pengaturan database Anda.

### 3. **Simpan perubahan** yang telah dilakukan pada file `.env`.

4. **Generate Application Key**
Setelah mengonfigurasi file environment, Anda perlu membuat application key untuk aplikasi Laravel Anda. Key ini digunakan untuk mengenkripsi data dan memberikan keamanan tambahan.

### 1. Jalankan perintah berikut di terminal:
    ```bash
    php artisan key:generate
    ```

### 2. Setelah perintah dieksekusi, Anda akan melihat pesan yang menunjukkan bahwa key telah berhasil dihasilkan.

5. **Migrasi dan Seed Database**
Setelah mengonfigurasi environment dan menghasilkan application key, langkah selanjutnya adalah memigrasikan database dan mengisi dengan data awal.

### 1. **Migrasi Database**
   Jalankan perintah berikut untuk membuat tabel yang diperlukan dalam database:
   ```bash
   php artisan migrate
   ```
6. **Menjalankan Aplikasi**
Setelah semua konfigurasi selesai dan database telah dimigrasi serta diisi dengan data awal, Anda dapat menjalankan aplikasi Laravel menggunakan perintah berikut:

### 1. **Menjalankan Server Pengembangan**
   Gunakan perintah berikut untuk menjalankan server pengembangan:
   ```bash
   php artisan serve
   ```
7. **Penggunaan**
Setelah aplikasi berjalan, Anda dapat mulai menggunakan sistem dengan langkah-langkah berikut:

### 1. **Login ke Aplikasi**
   - Buka halaman login dengan mengakses URL:
     ```
     http://localhost:8000/login
     ```
   - Masukkan kredensial (username dan password) yang telah Anda siapkan sebelumnya.

### 2. **Navigasi Menu**
   - Setelah berhasil login, Anda akan diarahkan ke dashboard utama aplikasi.
   - Di dashboard, Anda dapat mengakses berbagai menu seperti:
     - **Data Siswa**: Menambahkan, mengedit, dan menghapus data siswa.
     - **Data Guru**: Menambahkan, mengedit, dan menghapus data guru.
     - **Surat Tugas**: Membuat dan mengelola surat tugas untuk siswa.
     - **Surat Rekomendasi**: Membuat dan mengelola surat rekomendasi PIP.

### 3. **Fitur Khusus**
   - Anda juga dapat melakukan import data siswa dan guru menggunakan file Excel (XLSX).
   - Aplikasi ini juga menyediakan fitur untuk mencetak surat tugas dan surat rekomendasi dalam format PDF.

Dengan mengikuti langkah-langkah di atas, Anda dapat menggunakan aplikasi sesuai dengan kebutuhan.

8. **Struktur Proyek**
Struktur proyek ini mengikuti konvensi Laravel dan dapat diuraikan sebagai berikut:

E-Nawala/ ├── app/ # Folder utama aplikasi │ ├── Console/ # Artisan Commands │ ├── Exceptions/ # Exception Handler │ ├── Http/ # Kontroller dan Middleware │ ├── Models/ # Model Eloquent │ └── Providers/ # Service Providers ├── bootstrap/ # File bootstrap untuk aplikasi ├── config/ # File konfigurasi aplikasi ├── database/ # File migrasi dan seeders │ ├── migrations/ # Berkas migrasi database │ └── seeders/ # Berkas seeder database ├── public/ # Folder publik (CSS, JS, gambar) ├── resources/ # Sumber daya (views, lang) │ ├── js/ # Berkas JavaScript │ ├── lang/ # Berkas terjemahan │ └── views/ # Template Blade ├── routes/ # File rute aplikasi │ ├── api.php # Rute untuk API │ └── web.php # Rute untuk web ├── storage/ # File log dan cache ├── tests/ # Berkas pengujian aplikasi ├── .env # File konfigurasi environment ├── artisan # File Artisan untuk menjalankan perintah ├── composer.json # File untuk pengelolaan dependensi ├── package.json # File untuk pengelolaan dependensi front-end └── webpack.mix.js # File konfigurasi Mix untuk Asset

9. **Kontribusi**
Kontribusi dari Anda sangat diterima! Berikut adalah langkah-langkah untuk berkontribusi dalam proyek ini:

### 1. **Fork Proyek**
   - Klik tombol "Fork" di bagian kanan atas halaman GitHub ini untuk membuat salinan proyek ke akun GitHub Anda.

### 2. **Clone Proyek**
   - Setelah mem-fork, clone repositori ke komputer Anda dengan perintah:
     ```bash
     git clone https://github.com/USERNAME/E-Nawala.git
     ```
   - Gantilah `USERNAME` dengan nama pengguna GitHub Anda.

### 3. **Buat Cabang (Branch) Baru**
   - Sebelum melakukan perubahan, buatlah cabang baru:
     ```bash
     git checkout -b nama-cabang
     ```

### 4. **Lakukan Perubahan**
   - Lakukan perubahan yang diinginkan pada kode. Pastikan untuk menguji kode Anda sebelum melakukan commit.

### 5. **Commit dan Push**
   - Setelah selesai melakukan perubahan, lakukan commit dengan pesan yang jelas:
     ```bash
     git commit -m "Deskripsi perubahan"
     ```
   - Push perubahan ke repositori Anda:
     ```bash
     git push origin nama-cabang
     ```

### 6. **Buat Pull Request**
   - Kembali ke repositori asli, dan Anda akan melihat tombol untuk membuat Pull Request. Klik tombol tersebut dan ikuti instruksinya untuk mengajukan perubahan Anda.

10. **Lisensi**
Proyek ini dilisensikan di bawah [MIT License](https://opensource.org/licenses/MIT). Silakan lihat berkas [LICENSE](LICENSE) untuk informasi lebih lanjut.


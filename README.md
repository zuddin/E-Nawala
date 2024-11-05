E-Nawala
E-Nawala adalah aplikasi manajemen administrasi surat berbasis web yang dibangun dengan Laravel dan menggunakan Admin LTE sebagai template antarmuka. Aplikasi ini menyediakan fitur manajemen data guru, siswa, serta pengelolaan surat tugas dan surat rekomendasi dengan kemampuan untuk mencetak ke format PDF.

Fitur
Manajemen Data Guru: Tambah, lihat, edit, hapus, serta impor data guru dari file xlsx.
Manajemen Data Siswa: Tambah, lihat, edit, hapus, serta impor data siswa dari file xlsx.
Pengelolaan Surat Tugas: Membuat surat tugas yang bisa diisi oleh lebih dari satu siswa.
Pengelolaan Surat Rekomendasi PIP: Surat rekomendasi untuk program PIP yang terhubung dengan data siswa.
Dashboard Informatif: Menyediakan statistik penting yang disesuaikan untuk administrasi.
Pencetakan PDF: Mencetak surat tugas dan surat rekomendasi ke format PDF.
Instalasi
Ikuti langkah-langkah berikut untuk menginstal dan menjalankan aplikasi ini di lokal Anda.

1. Clone Repository
Clone repository ini dari GitHub:

bash
Copy code
git clone https://github.com/zuddin/E-Nawala.git
cd E-Nawala
2. Install Dependencies
Instal dependensi PHP yang diperlukan menggunakan Composer:

bash
Copy code
composer install
Instal dependensi front-end dengan npm:

bash
Copy code
npm install && npm run dev
3. Konfigurasi Lingkungan
Duplikasi file .env.example menjadi .env:

bash
Copy code
cp .env.example .env
Generate kunci aplikasi Laravel:

bash
Copy code
php artisan key:generate
4. Konfigurasi Database
Edit file .env dan sesuaikan detail database Anda:

plaintext
Copy code
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database_anda
DB_USERNAME=username_database_anda
DB_PASSWORD=password_database_anda
5. Migrasi Database
Jalankan migrasi untuk membuat tabel-tabel yang diperlukan:

bash
Copy code
php artisan migrate
Jika aplikasi memerlukan data awal, Anda juga bisa menjalankan seeder:

bash
Copy code
php artisan db:seed
6. Menjalankan Server Lokal
Untuk menjalankan aplikasi di server lokal:

bash
Copy code
php artisan serve
Akses aplikasi di http://127.0.0.1:8000.

7. Login dengan Admin LTE
Aplikasi ini menggunakan Admin LTE sebagai template, dengan halaman login yang telah dimodifikasi untuk aplikasi Anda.

Penggunaan
Login: Masukkan kredensial untuk masuk ke dashboard.
Navigasi: Gunakan menu di sisi kiri untuk mengakses data guru, data siswa, dan pengelolaan surat.
Pengelolaan Surat: Buat surat tugas atau surat rekomendasi PIP yang dapat dicetak dalam format PDF.
Dashboard: Melihat statistik dan informasi yang membantu dalam manajemen.
Kontribusi
Jika Anda ingin berkontribusi pada aplikasi ini, silakan buat pull request atau ajukan issue pada repository ini.

Lisensi
E-Nawala dilisensikan di bawah MIT License.

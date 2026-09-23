WEB UKK ADITIA - SMK NEGERI 1 CIJATI
====================================

PROJECT LARAVEL INI SUDAH DIRAPIKAN DAN DISESUAIKAN AGAR DATABASE, MODEL,
CONTROLLER, ROUTE, FORM, SEEDER, DAN TAMPILAN MENGGUNAKAN NAMA TABEL/KOLOM
YANG SALING COCOK.

A. PEMASANGAN DI PC LARAGON
---------------------------
1. Ekstrak ZIP ke:
   C:\laragon\www\

2. Buka folder project yang berisi file "artisan" menggunakan VS Code.

3. Buka Terminal VS Code pada folder tersebut.

4. Pastikan Laragon -> Start All. Minimal MySQL harus berjalan.

5. Jalankan:
   composer install

6. File .env sudah disiapkan untuk database:
   DB_DATABASE=smkn1_cijati
   DB_USERNAME=root
   DB_PASSWORD=

   Jika .env tidak ikut tersalin, buat dari .env.example:
   Copy-Item .env.example .env
   lalu jalankan:
   php artisan key:generate

7. Buka phpMyAdmin dan buat DATABASE KOSONG dengan nama:
   smkn1_cijati

   Tidak perlu membuat tabel satu per satu.

8. Jalankan:
   php artisan migrate:fresh --seed

   PERINGATAN: migrate:fresh menghapus tabel di DATABASE YANG SEDANG TERHUBUNG.
   Gunakan hanya untuk database smkn1_cijati yang memang disiapkan untuk project ini.

9. Jika selesai tanpa ERROR, jalankan:
   php artisan serve

10. Buka browser:
    http://127.0.0.1:8000

B. LOGIN ADMIN
--------------
Email    : admin@smkn1cijati.sch.id
Password : admin12345

C. DATA AWAL DARI SEEDER
------------------------
- 4 jurusan: PPLG, APHP, TKRO, BDP
- 48 data guru/pegawai
- 4 ekstrakurikuler
- 3 berita
- 1 akun admin

D. NAMA TABEL DATABASE
----------------------
users
jurusans
guru
ekstrakurikuler
berita

Nama tabel "guru" dan "ekstrakurikuler" sengaja dibuat SINGULAR dan sudah
cocok antara migration, model, controller, route, form, seeder, dan SQL backup.

E. SQL BACKUP
-------------
File database/smkn1_cijati.sql adalah pilihan alternatif untuk import manual.
Jika menggunakan "php artisan migrate:fresh --seed", JANGAN import SQL lagi.
Pilih salah satu metode saja.

F. CATATAN
----------
- Folder vendor tidak disertakan dalam ZIP. Jalankan composer install di PC.
- Apache tidak wajib jika memakai php artisan serve, tetapi MySQL harus aktif.
- public/index.php sudah tersedia.
- Form checkbox Aktif sudah memiliki hidden value 0 sehingga bisa dimatikan saat edit.
- Validasi kode jurusan sudah disesuaikan dengan kolom kode VARCHAR(20) UNIQUE.
- Model hanya melakukan cast pada kolom yang benar-benar ada di tabel masing-masing.
- Jika muncul ERROR merah di Terminal, jangan hapus database. Kirim screenshot ERROR-nya.

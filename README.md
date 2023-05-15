# Mudik Gratis di PGN - Aplikasi Web

Aplikasi Mudik Gratis di PGN adalah aplikasi manajemen pendaftaran dan verifikasi bagi calon pemudik yang ingin ikut mudik gratis bersama PGN Group dan keluarga. Aplikasi ini dibangun menggunakan PHP dengan framework CodeIgniter dan menggunakan database MySQL.

## Fitur Utama

- Admin dapat mengentri data moda transportasi, rute, dan jadwal keberangkatan.
- Admin dapat melihat jumlah slot tersedia di masing-masing rute keberangkatan.
- Calon penumpang dapat mendaftarkan lebih dari 1 penumpang.
- Admin dapat memverifikasi pendaftaran tiket dari calon penumpang.
- Calon penumpang dapat mengecek status verifikasi dan tiket menggunakan kode booking.
- Hanya calon penumpang yang terverifikasi yang mendapatkan tiket.

## Struktur Folder

- `application`: Berisi file-file terkait dengan aplikasi web.
- `public`: Berisi file-file publik seperti CSS, JavaScript, dan gambar.
- `system`: Berisi file-file inti dari framework CodeIgniter.

## Cara Menjalankan Aplikasi

1. Pastikan Anda memiliki lingkungan pengembangan web yang sudah terpasang (misalnya XAMPP, WAMP, atau LAMP).
2. Clone repositori ini ke direktori htdocs (atau sesuai dengan direktori server web lokal Anda).
3. Buatlah database dengan nama "aplikasi_mudik_pgn" di MySQL.
4. Import file "aplikasi_mudik_pgn.sql" yang terdapat dalam folder "database" ke dalam database yang telah dibuat.
5. Sesuaikan pengaturan database pada file `application/config/database.php`.
6. Buka browser dan akses aplikasi menggunakan URL `http://localhost/public/`.

## Kontribusi

Jika Anda ingin berkontribusi pada proyek ini, Anda dapat melakukan fork dari repositori ini, melakukan perubahan yang diinginkan, dan mengajukan pull request.

## Lisensi

Proyek ini dilisensikan di bawah lisensi [MIT](LICENSE).

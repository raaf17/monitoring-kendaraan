## PERSYARATAN
1. Versi PHP 7.4+
2. Framework Laravel
3. Versi MYSQL 8
4. Composer
5. Peramban Web
6. Server PHP (Laragon atau Xampp)

## INSTALASI
1. Clone proyek ini
2. Buka terminal dan ketik `composer update` atau `composer install` (jika tidak berfungsi, ketik `composer install --ignore-platform-reqs`)
3. Salin `.env.example` dan tempel di sini, ubah nama `.env.example.copy` menjadi `.env`
4. Konfigurasikan koneksi basis data Anda
5. Jalankan "php artisan key:generate" dan "php artisan config:clear"
6. Jalankan "php artisan migrate" dan "php artisan db:seed" untuk membuat tabel dan memasukkan pengguna default
7. Jalankan "php artisan serve"
8. Buka peramban dan ketik 127.0.0.1:8000

## CARA MENGGUNAKAN APLIKASI
1. Masuk dengan pengguna
   1. Nama pengguna: admin
   2. Kata sandi: 12345
2. Pergi ke halaman perusahaan dan buat perusahaan
3. Setelah itu, pergi ke halaman kendaraan dan buat kendaraan
4. Pergi ke halaman permintaan kendaraan dan buat permintaan kendaraan
5. Setelah itu, Anda dapat menyetujui permintaan kendaraan Anda
6. Setelah itu, Anda harus keluar
7. Masuk dengan pengguna pejabat
   1. Nama pengguna: pejabat
   2. Kata sandi: 12345
8. Pergi ke halaman permintaan kendaraan dan setujui permintaan
9. Anda dapat melihat kolom status berubah
10. Setelah itu, Anda harus keluar dan masuk dengan pengguna admin
11. Pergi ke menu kendaraan dan pilih dropdown monitoring kendaraan
12. Di sini Anda dapat melihat status dan riwayat kendaraan
13. Jika Anda ingin melihat log aktivitas Anda, Anda dapat pergi ke menu log aktivitas
14. Setelah itu ada menu profil, Anda dapat mengedit nama pengguna dan kata sandi Anda di sini

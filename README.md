Overview Project:
Project ini memiliki 2 role yaitu pengguna dan superadmin. Superadmin dapat menambah, mengedit, menghapus user. sementara itu pengguna dapat menambahkan informasi kontak seperti nama, email, no telpon. superadmin dapat melihat daftar kontak yang di buat oleh pengguna tetapi pengguna hanya dapat melihat daftar kontak yang dirinya sendiri tambahkan.

Nb:
1. Project menggunkan laravel versi 8 dengan ketentuan minimal versi php 8.0
2. Role pada user menggunakan spatie https://spatie.be/docs/laravel-permission/v5/installation-laravel
3. Login, Register, menggunakan breeze dari laravel sehingga diperlukan instalasi npm https://laravel.com/docs/9.x/starter-kits#laravel-breeze
4. user dan password superadmin
email : test@example.com
password : password

Instalasi Project : 
1. Clone Project
2. composer install
3. npm install
4. setting env
5. migrate dan seeder database "php artisan migrate --seed"
4. jalankan project "php artisan serv"

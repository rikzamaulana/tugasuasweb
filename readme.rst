###################
CodeIgniter
###################

CodeIgniter adalah suatu framework php yang menggunakan konsep MVC (Model View Controller), Aplikasi yang berkonsep MVC yaitu menggunakan model sebagai perantara untuk menyambungkan antara view dan model, sedangkan view itu untuk mengurusi tampilan dan sedangkan untuk controller itu menangani bagian database.

*******************
Cara Instalasi
*******************
Sebelum melakukan instalasi anda harus memiliki server local seperti xampp.
1. Download file diatas dengan memilih clone or download kemudian pilih download zip.
2. Extrak file dowload tadi, karena file tadi dalam bentuk zip, setelah di extrak tempatkan file tersebut di htdocs.
3. Jalankan xampp, Kemudian buka browser dan masuk ke phpmyadmin, buat database dengan nama harvialte.
4. Import file harvialte.sql kedalam database yang kita buat tadi.
5. Edit file config.php yang berada pada folder application/config/, ganti $config['base_url'] = "lokasi file anda".
6. Edit file database.php berada pada folder application/config/, ganti username dan password.
7. Kembali ke browser masukan lokasi file anda/url alamat file projek ini.
8. Selesai.

NB: Username: admin@admin.com Password: password

**************************
Fitur Aplikasi Web
**************************
1. Login Admin
2. Tambah, Edit, Hapus Data Pelanggan
3. Menu Transaksi
4. Riwayat Transaksi
5. Responsive Web

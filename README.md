# Jawaban Pertanyaan Jobsheet 3

### 1. Pada Praktikum 1 - Tahap 5, apakah fungsi dari APP_KEY pada file setting .env Laravel?<br>

- Jawab : APP_KEY pada file setting .env Laravel digunakan sebagai kunci enkripsi dan penandatanganan data yang sensitif, seperti sesi pengguna. Fungsi ini penting untuk keamanan aplikasi.<br>

### 2. Pada Praktikum 1, bagaimana kita men-generate nilai untuk APP_KEY?<br>

- Jawab : nilai untuk APP_KEY dapat di-generate menggunakan perintah artisan php artisan key:generate.<br>

### 3. Pada Praktikum 2.1 - Tahap 1, secara default Laravel memiliki berapa file migrasi?

dan untuk apa saja file migrasi tersebut?<br>

- Jawab : secara default Laravel memiliki dua file migrasi, yaitu create_users_table.php dan create_password_resets_table.php. File migrasi ini digunakan untuk membuat tabel pengguna dan tabel reset password.<br>

### 4. Secara default, file migrasi terdapat kode $table->timestamps();, apa tujuan/output

dari fungsi tersebut?<br>

- Jawab : Kode $table->timestamps(); pada file migrasi menambahkan dua kolom, yaitu created_at dan updated_at, yang secara otomatis akan diisi waktu ketika record dibuat dan diupdate.<br>

### 5. Pada File Migrasi, terdapat fungsi $table->id(); Tipe data apa yang dihasilkan dari

fungsi tersebut?<br>

- Jawab : Fungsi $table->id(); pada file migrasi menghasilkan tipe data kolom primary key yang bertipe big integer dengan sifat auto-increment.<br>

### 6. Apa bedanya hasil migrasi pada table m_level, antara menggunakan $table->id();

dengan menggunakan $table->id('level_id'); ?<br>

- Jawab : Hasil migrasi pada tabel m_level menggunakan $table->id(); dan $table->id('level_id'); tidak berbeda secara substansial. Perbedaan terletak pada penamaan kolom primary key, di mana menggunakan $table->id('level_id'); memberikan nama kolom primary key khusus.<br>

### 7. Pada migration, Fungsi ->unique() digunakan untuk apa?<br>

- Jawab : Fungsi ->unique() pada migration digunakan untuk menentukan bahwa nilai pada kolom tersebut harus unik di dalam tabel.<br>

### 8. Pada Praktikum 2.2 - Tahap 2, kenapa kolom level_id pada tabel m_user

menggunakan $tabel->unsignedBigInteger('level_id'), sedangkan kolom level_id
pada tabel m_level menggunakan $tabel->id('level_id') ?<br>

- Jawab : perbedaan penggunaan $tabel->unsignedBigInteger('level_id') dan $tabel->id('level_id') terletak pada jenis kolom yang dihasilkan. Yang pertama menghasilkan kolom big integer yang tidak auto-increment, sementara yang kedua menghasilkan primary key dengan nama kolom 'level_id'.<br>

### 9. Pada Praktikum 3 - Tahap 6, apa tujuan dari Class Hash? dan apa maksud dari kode

program Hash::make('1234');?<br>

- Jawab : Class Hash pada Laravel digunakan untuk melakukan hashing, yaitu mengacak nilai teks, seperti password, untuk meningkatkan keamanan. Kode program Hash::make('1234'); digunakan untuk menghasilkan hash dari string '1234'.<br>

### 10. Pada Praktikum 4 - Tahap 3/5/7, pada query builder terdapat tanda tanya (?), apa

kegunaan dari tanda tanya (?) tersebut?<br>

- Jawab : tanda tanya (?) pada query builder digunakan sebagai placeholder untuk parameter yang akan di-bind nanti. Ini membantu mencegah SQL injection dan memungkinkan penggunaan nilai yang aman dalam query.<br>

### 11. Pada Praktikum 6 - Tahap 3, apa tujuan penulisan kode protected $table =

‘m_user’; dan protected $primaryKey = ‘user_id’; ?<br>

- Jawab : kode protected $table = 'm_user'; dan protected $primaryKey = 'user_id'; digunakan untuk menentukan nama tabel dan primary key yang digunakan oleh model tersebut.<br>

### 12. Menurut kalian, lebih mudah menggunakan mana dalam melakukan operasi CRUD ke

database (DB Facade / Query Builder / Eloquent ORM) ? jelaskan<br>

- Jawab : Pilihan antara DB Facade, Query Builder, dan Eloquent ORM tergantung pada kebutuhan dan preferensi pengembang. Eloquent ORM sering dianggap lebih mudah dan ekspresif karena memanfaatkan model dan relasi, sementara DB Facade dan Query Builder memberikan lebih banyak kontrol langsung atas kueri SQL. Pilihan tergantung pada kompleksitas proyek dan kebutuhan pengembangan.<br>

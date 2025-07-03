# SIMPRAK: Sistem Informasi Manajemen Praktikum

Aplikasi web berbasis PHP Native untuk manajemen kegiatan praktikum di institusi pendidikan, mencakup fungsionalitas untuk Mahasiswa dan Asisten.

## Fitur Utama

### Fungsionalitas Mahasiswa

* **Mencari Mata Praktikum**: Halaman katalog yang menampilkan semua mata praktikum yang tersedia.
* **Mendaftar ke Praktikum**: Mahasiswa yang login dapat mendaftar ke mata praktikum.
* **Melihat Praktikum yang Diikuti**: Daftar mata praktikum yang sudah diikuti oleh mahasiswa.
* **Melihat Detail & Tugas**: Detail praktikum, daftar modul, link unduh materi, form pengumpulan laporan, dan status nilai.
* **Mengumpulkan Laporan**: Mengunggah file laporan/tugas untuk setiap modul.
* **Melihat Nilai**: Menampilkan nilai dan feedback yang diberikan asisten.

### Fungsionalitas Asisten (Admin)

* **Mengelola Mata Praktikum**: Operasi CRUD (Create, Read, Update, Delete) untuk data master mata praktikum.
* **Mengelola Modul**: Operasi CRUD untuk modul/pertemuan, termasuk upload file materi.
* **Melihat Laporan Masuk**: Menampilkan daftar semua laporan yang dikumpulkan mahasiswa, dengan filter.
* **Memberi Nilai Laporan**: Memberikan nilai dan feedback untuk laporan, serta mengunduh file laporan.
* **Mengelola Akun Pengguna**: Operasi CRUD untuk semua akun pengguna (Mahasiswa dan Asisten).

## Tampilan Antarmuka (User Interface)

Berikut adalah tangkapan layar dari berbagai tampilan antarmuka aplikasi SIMPRAK.

---

### 1. Halaman Registrasi (Register.php)
(Contoh URL: `http://localhost/20230140216_UAS_PDW/register.php`)
![Screenshot Registrasi](screenshots/register.png)

---

### 2. Halaman Login (Login.php)
(Contoh URL: `http://localhost/20230140216_UAS_PDW/login.php`)
![Screenshot Login](screenshots/login.png)

---

### 3. Katalog Mata Praktikum (Katalog_praktikum.php)
(Contoh URL: `http://localhost/20230140216_UAS_PDW/katalog_praktikum.php`)
![Screenshot Katalog Praktikum](screenshots/katalog_praktikum.png)

---

### 4. Detail Praktikum Mahasiswa (Detail_praktikum.php)
(Contoh URL: `http://localhost/20230140216_UAS_PDW/detail_praktikum.php?id=3`)
![Screenshot Detail Praktikum Mahasiswa](screenshots/detail_praktikum_mhs.png)

---

### 5. Dashboard Mahasiswa (mahasiswa/dashboard.php)
(Contoh URL: `http://localhost/20230140216_UAS_PDW/mahasiswa/dashboard.php`)
![Screenshot Dashboard Mahasiswa](screenshots/dashboard_mahasiswa.png)

---

### 6. Praktikum yang Diikuti Mahasiswa (mahasiswa/praktikum_saya.php)
(Contoh URL: `http://localhost/20230140216_UAS_PDW/mahasiswa/praktikum_saya.php`)
![Screenshot Praktikum Saya](screenshots/praktikum_saya.png)

---

### 7. Dashboard Asisten (asisten/dashboard.php)
(Contoh URL: `http://localhost/20230140216_UAS_PDW/asisten/dashboard.php`)
![Screenshot Dashboard Asisten](screenshots/dashboard_asisten.png)

---

### 8. Kelola Mata Praktikum Asisten (asisten/praktikum_management.php)
(Contoh URL: `http://localhost/20230140216_UAS_PDW/asisten/praktikum_management.php`)
![Screenshot Kelola Praktikum Asisten](screenshots/praktikum_management.png)

---

### 9. Tambah Praktikum Baru (asisten/praktikum_add.php)
(Contoh URL: `http://localhost/20230140216_UAS_PDW/asisten/praktikum_add.php`)
![Screenshot Tambah Praktikum](screenshots/praktikum_add.png)

---

### 10. Edit Praktikum (asisten/praktikum_edit.php)
(Contoh URL: `http://localhost/20230140216_UAS_PDW/asisten/praktikum_edit.php?id=1`)
![Screenshot Edit Praktikum](screenshots/praktikum_edit.png)

---

### 11. Kelola Modul (asisten/module_management.php)
(Contoh URL: `http://localhost/20230140216_UAS_PDW/asisten/module_management.php?praktikum_id=3`)
![Screenshot Kelola Modul](screenshots/module_management.png)

---

### 12. Tambah Modul Baru (asisten/module_add.php)
(Contoh URL: `http://localhost/20230140216_UAS_PDW/asisten/module_add.php?praktikum_id=3`)
![Screenshot Tambah Modul](screenshots/module_add.png)

---

### 13. Edit Modul (asisten/module_edit.php)
(Contoh URL: `http://localhost/20230140216_UAS_PDW/asisten/module_edit.php?id=1&praktikum_id=3`)
![Screenshot Edit Modul](screenshots/module_edit.png)

---

### 14. Laporan Masuk Asisten (asisten/report_inbox.php)
(Contoh URL: `http://localhost/20230140216_UAS_PDW/asisten/report_inbox.php`)
![Screenshot Laporan Masuk](screenshots/report_inbox.png)

---

### 15. Beri Nilai Laporan (asisten/grade_report.php)
(Contoh URL: `http://localhost/20230140216_UAS_PDW/asisten/grade_report.php?report_id=1`)
![Screenshot Beri Nilai Laporan](screenshots/grade_report.png)

---

### 16. Kelola Akun Pengguna Asisten (asisten/user_management.php)
(Contoh URL: `http://localhost/20230140216_UAS_PDW/asisten/user_management.php`)
![Screenshot Kelola Akun Pengguna](screenshots/user_management.png)

---

### 17. Tambah Akun Pengguna (asisten/user_add.php)
(Contoh URL: `http://localhost/20230140216_UAS_PDW/asisten/user_add.php`)
![Screenshot Tambah Akun Pengguna](screenshots/user_add.png)

---

### 18. Edit Akun Pengguna (asisten/user_edit.php)
(Contoh URL: `http://localhost/20230140216_UAS_PDW/asisten/user_edit.php?id=1`)
![Screenshot Edit Akun Pengguna](screenshots/user_edit.png)

---

## Cara Menjalankan Aplikasi

1.  **Persyaratan:**
    * Web Server (Apache via XAMPP/WAMP/Laragon)
    * PHP (versi 7.x atau 8.x)
    * Database Server (MySQL/MariaDB)

2.  **Setup Proyek:**
    * Kloning repositori ini (atau unduh file proyek) ke direktori `htdocs` web server Anda (misalnya `C:\xampp\htdocs\20230140216_UAS_PDW`).
    * Pastikan nama folder proyek adalah `20230140216_UAS_PDW` atau sesuaikan URL di `config.php` dan `logout.php`.

3.  **Setup Database:**
    * Buka phpMyAdmin (`http://localhost/phpmyadmin/`).
    * Buat database baru dengan nama `simpak_db`.
    * Impor file `simpak_db.sql` yang ada di root proyek ke database `simpak_db`.
    * Pastikan file `config.php` terhubung dengan benar ke database `simpak_db`.

4.  **Konfigurasi Izin Folder Uploads:**
    * Pastikan folder `uploads` (beserta sub-folder `materi` dan `laporan`) yang ada di root proyek memiliki izin tulis (write permission) agar aplikasi dapat menyimpan file. Di Windows, berikan "Full Control" untuk "Everyone" pada folder `uploads`.

5.  **Akses Aplikasi:**
    * Buka browser Anda dan akses URL: `http://localhost/20230140216_UAS_PDW/katalog_praktikum.php`
    * Anda juga dapat memulai dengan registrasi akun di `http://localhost/20230140216_UAS_PDW/register.php`.


## Struktur Proyek

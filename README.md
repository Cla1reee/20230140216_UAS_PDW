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
![register](https://github.com/user-attachments/assets/e85942bf-2689-4650-84ce-dfdeb149f4cc)


---

### 2. Halaman Login (Login.php)
(Contoh URL: `http://localhost/20230140216_UAS_PDW/login.php`)
![login](https://github.com/user-attachments/assets/9591a2df-3e0f-49e9-a27b-14ef88f3d402)

---

### 3. Katalog Mata Praktikum (Katalog_praktikum.php)
(Contoh URL: `http://localhost/20230140216_UAS_PDW/katalog_praktikum.php`)
![katalog_praktikum](https://github.com/user-attachments/assets/c4c4cbe2-8bcc-4777-b384-a22133c22677)


---

### 4. Detail Praktikum Mahasiswa (Detail_praktikum.php)
(Contoh URL: `http://localhost/20230140216_UAS_PDW/detail_praktikum.php?id=3`)
![detail_praktikum](https://github.com/user-attachments/assets/05bbd135-6390-4650-a73d-42229ba8ebe1)

---

### 5. Dashboard Mahasiswa (mahasiswa/dashboard.php)
(Contoh URL: `http://localhost/20230140216_UAS_PDW/mahasiswa/dashboard.php`)
![dashboard_mahasiswa](https://github.com/user-attachments/assets/4b62d1d5-818d-4565-85ef-bd6c6c3a9e8d)


---

### 6. Praktikum yang Diikuti Mahasiswa (mahasiswa/praktikum_saya.php)
(Contoh URL: `http://localhost/20230140216_UAS_PDW/mahasiswa/praktikum_saya.php`)
![praktikum_saya](https://github.com/user-attachments/assets/842bb00f-582d-4c3f-b84c-225cc787063f)

---

### 7. Dashboard Asisten (asisten/dashboard.php)
(Contoh URL: `http://localhost/20230140216_UAS_PDW/asisten/dashboard.php`)
![dashboaard_asisten](https://github.com/user-attachments/assets/19083fa6-9cdd-4a06-b297-5c7bf2985b38)


---

### 8. Kelola Mata Praktikum Asisten (asisten/praktikum_management.php)
(Contoh URL: `http://localhost/20230140216_UAS_PDW/asisten/praktikum_management.php`)
![praktikum_management](https://github.com/user-attachments/assets/72f0ac5d-e212-429d-8886-72bf9c52af7f)


---

### 9. Tambah Praktikum Baru (asisten/praktikum_add.php)
(Contoh URL: `http://localhost/20230140216_UAS_PDW/asisten/praktikum_add.php`)
![praktikum_add](https://github.com/user-attachments/assets/7ac10925-261e-4dc2-a36c-86b5fb60a803)


---

### 10. Edit Praktikum (asisten/praktikum_edit.php)
(Contoh URL: `http://localhost/20230140216_UAS_PDW/asisten/praktikum_edit.php?id=1`)
![praktikum_edit](https://github.com/user-attachments/assets/e784df61-3d73-4e18-9a1e-1ac52c17dd49)


---

### 11. Kelola Modul (asisten/module_management.php)
(Contoh URL: `http://localhost/20230140216_UAS_PDW/asisten/module_management.php?praktikum_id=3`)
![module_management](https://github.com/user-attachments/assets/a0d3005b-68ee-47c9-acae-51529d2f4927)


---

### 12. Tambah Modul Baru (asisten/module_add.php)
(Contoh URL: `http://localhost/20230140216_UAS_PDW/asisten/module_add.php?praktikum_id=3`)
![praktikum_add](https://github.com/user-attachments/assets/4837e84f-396a-4386-9158-e8a62a9d25cd)


---

### 13. Edit Modul (asisten/module_edit.php)
(Contoh URL: `http://localhost/20230140216_UAS_PDW/asisten/module_edit.php?id=1&praktikum_id=3`)
![praktikum_edit](https://github.com/user-attachments/assets/6f0d7402-5577-4bcf-a072-fb2960e00b03)


---

### 14. Laporan Masuk Asisten (asisten/report_inbox.php)
(Contoh URL: `http://localhost/20230140216_UAS_PDW/asisten/report_inbox.php`)
![report_inbox](https://github.com/user-attachments/assets/6a82d892-4228-4711-9f83-6913e394c6f5)


---

### 15. Beri Nilai Laporan (asisten/grade_report.php)
(Contoh URL: `http://localhost/20230140216_UAS_PDW/asisten/grade_report.php?report_id=1`)
![grade_report](https://github.com/user-attachments/assets/25fd3635-d3c3-42db-85a1-c87d6c85a64b)


---

### 16. Kelola Akun Pengguna Asisten (asisten/user_management.php)
(Contoh URL: `http://localhost/20230140216_UAS_PDW/asisten/user_management.php`)
![user_management](https://github.com/user-attachments/assets/a4f13831-5a52-4b8d-acae-f9c988ce00d0)


---

### 17. Tambah Akun Pengguna (asisten/user_add.php)
(Contoh URL: `http://localhost/20230140216_UAS_PDW/asisten/user_add.php`)
![user_add](https://github.com/user-attachments/assets/42148073-5652-41fc-a877-0c27a43ed490)


---

### 18. Edit Akun Pengguna (asisten/user_edit.php)
(Contoh URL: `http://localhost/20230140216_UAS_PDW/asisten/user_edit.php?id=1`)
![user_edit](https://github.com/user-attachments/assets/adbb7b32-dc11-4a9c-b91b-c606f1967dfd)


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

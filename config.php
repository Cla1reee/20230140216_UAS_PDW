<?php
// Pengaturan Database
define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'simpak_db'); 

// Membuat koneksi ke database
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Tambahkan ini untuk memastikan karakter dihandle dengan benar
$conn->set_charset("utf8mb4");

// Optional: Anda bisa menambahkan BASE_URL juga di sini jika diperlukan untuk path absolut
// define('BASE_URL', 'http://localhost/SistemPengumpulanTugas/'); // Sesuaikan dengan URL proyek Anda
?>
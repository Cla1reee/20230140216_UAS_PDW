<?php
// Pastikan session sudah dimulai di halaman yang memanggil ini
// session_start(); // Jangan panggil session_start di sini jika sudah ada di file utama
// include '../config.php'; // Atau atur koneksi di sini jika diperlukan di header

// Ambil nama asisten dari session, atau atur default jika belum login
$nama_asisten_header = isset($_SESSION['nama']) ? htmlspecialchars($_SESSION['nama']) : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?? 'Dashboard Asisten'; ?> - SIMPRAK Asisten</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <nav class="bg-purple-700 p-4 text-white shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <a href="dashboard.php" class="text-2xl font-extrabold tracking-tight hover:text-purple-200 transition-colors duration-200">SIMPRAK Asisten</a>

            <div class="hidden md:flex items-center space-x-6">
                <a href="praktikum_management.php" class="text-white hover:text-purple-200 transition-colors duration-200 text-lg font-medium">Kelola Praktikum</a>
                <a href="module_management.php?praktikum_id=1" class="text-white hover:text-purple-200 transition-colors duration-200 text-lg font-medium">Kelola Modul</a>
                <a href="report_inbox.php" class="text-white hover:text-purple-200 transition-colors duration-200 text-lg font-medium">Laporan Masuk</a>
                <a href="user_management.php" class="text-white hover:text-purple-200 transition-colors duration-200 text-lg font-medium">Kelola Akun</a>
            </div>

            <div class="hidden md:flex items-center space-x-4">
                <span class="text-lg font-medium">Halo, <?php echo $nama_asisten_header; ?></span>
                <a href="../logout.php" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full shadow transition-colors duration-200">Logout</a>
            </div>

            <div class="md:hidden flex items-center">
                <button id="menu-button" class="text-white focus:outline-none">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="hidden md:hidden bg-purple-800 py-2 mt-2 rounded-lg">
            <a href="praktikum_management.php" class="block px-4 py-2 text-white hover:bg-purple-700 transition-colors duration-200">Kelola Praktikum</a>
            <a href="module_management.php?praktikum_id=1" class="block px-4 py-2 text-white hover:bg-purple-700 transition-colors duration-200">Kelola Modul</a>
            <a href="report_inbox.php" class="block px-4 py-2 text-white hover:bg-purple-700 transition-colors duration-200">Laporan Masuk</a>
            <a href="user_management.php" class="block px-4 py-2 text-white hover:bg-purple-700 transition-colors duration-200">Kelola Akun</a>
            <hr class="border-purple-600 my-2">
            <span class="block px-4 py-2 text-white">Halo, <?php echo $nama_asisten_header; ?></span>
            <a href="../logout.php" class="block px-4 py-2 bg-red-600 hover:bg-red-700 text-white font-bold rounded-lg mx-4 mt-2 text-center">Logout</a>
        </div>
    </nav>
    <script>
        // JavaScript for mobile menu toggle
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.getElementById('menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            if (menuButton && mobileMenu) {
                menuButton.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                });
            }
        });
    </script>
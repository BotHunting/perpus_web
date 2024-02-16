<?php
// Mulai sesi jika belum dimulai
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Periksa apakah pengguna sudah login
if(isset($_SESSION['username'])){
    $username = $_SESSION['username']; // Ambil username dari sesi
    $logout_link = '<li class="nav-item active">
                        <a class="nav-link font-weight-bold text-center" href="logout.php">Logout</a>
                    </li>'; // Tautan untuk logout
} else {
    // Jika belum login, tidak perlu menampilkan tautan logout
    $logout_link = '';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>TUGAS PROYEK PBW</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        .navbar {
            background-color: rgba(128, 128, 128, 0.2); /* Warna abu-abu dengan transparansi */
            backdrop-filter: blur(10px); /* Efek blur */
            text-align: center; /* Rata tengah teks */
            height: 100px; /* Tinggi navbar */
            display: flex; /* Untuk rata tengah navbar */
            align-items: center; /* Untuk rata tengah navbar */
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light navbar sticky-top bg-check" id="myHeader">
    <div class="container">
        <img src="LOGO-NUSIA.png" height="80px" width="80px">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold text-center" href="index.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold text-center" href="home.php">Pengunjung</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold text-center" href="tambah.php">Daftar</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold text-center" href="buku.php">Buku Perpustakaan</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold text-center" href="tambahbuku.php">Tambah Buku</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold text-center" href="petugas.php">Petugas</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold text-center" href="tambahpetugas.php">Tambah Petugas</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold text-center" href="pinjam.php">Peminjaman</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold text-center" href="tambahpinjam.php">Tambah Peminjaman</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold text-center" href="pengembalian.php">Pengembalian</a>
                </li>
                <?php echo $logout_link; // Tampilkan tautan logout ?>
            </ul>
        </div>
    </div>
</nav>

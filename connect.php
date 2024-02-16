<?php

try {
    $coneksi = mysqli_connect("localhost", "root", "", "cyber_db");
    if (!$coneksi) {
        throw new Exception("Koneksi database gagal: " . mysqli_connect_error());
    }
} catch (Exception $e) {
    echo "Terjadi kesalahan: " . $e->getMessage();
    die(); // Hentikan eksekusi skrip jika terjadi kesalahan koneksi
}

?>

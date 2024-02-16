<?php
include('connect.php');

// Mendapatkan data dari form pendaftaran
$username = $_POST['username'];
$password = $_POST['password'];

// Enkripsi password sebelum disimpan ke database
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Memasukkan data pengguna baru ke dalam tabel users
$query = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";
$result = mysqli_query($coneksi, $query);

if ($result) {
    // Jika pendaftaran berhasil, arahkan ke halaman login
    header("Location: login.php?register_success=true");
    exit();
} else {
    // Jika terjadi kesalahan, tampilkan pesan kesalahan
    echo "Error: " . mysqli_error($coneksi);
}

// Tutup koneksi database
mysqli_close($coneksi);
?>

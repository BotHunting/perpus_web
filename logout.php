<?php
session_start(); // Mulai sesi

// Hapus semua data sesi
session_unset();

// Hapus sesi
session_destroy();

// Redirect ke halaman login.php dengan pesan
header("Location: login.php?pesan=logout");
exit;
?>

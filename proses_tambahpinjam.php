<?php 
include('connect.php');

$no_pinjam = rand(1,99);
$nim = $_POST['nim'];
$id_buku = $_POST['id_buku'];
$waktu = date('Y-m-d');

$data = mysqli_query($coneksi, "INSERT INTO pinjam(no_pinjam, tanggal_pinjam, nim, id_buku) VALUES ('$no_pinjam', '$waktu', '$nim', '$id_buku')");
if ($data) {
    header("location:pinjam.php?pesan=datatersimpan");
} else {
    // Pesan kesalahan yang lebih informatif
    echo "<div class='alert alert-danger text-center mt-4' role='alert'>";
    echo "<h1 class='display-4'>Oops!</h1>";
    echo "<p class='lead'>Terjadi kesalahan saat menyimpan data.</p>";
    echo "<hr class='my-4'>";
    echo "<p>Silakan coba lagi atau hubungi administrator.</p>";
    echo "<a href='tambahpinjam.php' class='btn btn-danger'>Kembali</a>";
    echo "</div>";
}
?>

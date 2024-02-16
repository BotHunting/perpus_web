<?php
session_start();

// Cek apakah pengguna sudah login, jika tidak, redirect ke halaman login.php
if(!isset($_SESSION['username'])) {
    header("location: login.php");
}

// Sisanya adalah kode untuk menampilkan data petugas, seperti yang telah Anda buat sebelumnya
// ...
?>


<?php
include('connect.php');

// Deklarasikan variabel
$no_pinjam = "";
$tanggal_kembali = "";

// Mendapatkan data dari form
if (isset($_POST['no_pinjam']) && isset($_POST['tanggal_kembali'])) {
  $no_pinjam = $_POST['no_pinjam'];
  $tanggal_kembali = $_POST['tanggal_kembali'];

  // Validasi input
  if (empty($no_pinjam) || empty($tanggal_kembali)) {
    echo "<script>alert('Nomor Peminjaman dan Tanggal Kembali harus diisi!');</script>";
  } else {
    // Menjalankan query untuk memeriksa apakah nomor peminjaman ada dalam tabel pinjam
    $query_check = mysqli_query($coneksi, "SELECT * FROM pinjam WHERE no_pinjam='$no_pinjam'");
    
    // Jika nomor peminjaman tidak ditemukan
    if(mysqli_num_rows($query_check) == 0) {
      echo "<script>alert('Nomor Peminjaman tidak ditemukan dalam database!');</script>";
    } else {
      // Menjalankan query untuk mengupdate data pengembalian
      $query_update = mysqli_query($coneksi, "UPDATE pengembalian SET tanggal_kembali='$tanggal_kembali', status='Kembali' WHERE no_pinjam='$no_pinjam'");
      
      // Jika update data pengembalian berhasil
      if ($query_update) {
        // Menjalankan query untuk menghapus data di tabel pinjam
        $query_delete = mysqli_query($coneksi, "DELETE FROM pinjam WHERE no_pinjam='$no_pinjam'");
        
        // Menampilkan pesan
        if ($query_delete) {
          echo "<script>alert('Pengembalian buku berhasil! Data peminjaman telah dihapus.'); window.location.href='index.php';</script>";
        } else {
          echo "<script>alert('Pengembalian buku berhasil! Gagal menghapus data peminjaman.'); window.location.href='index.php';</script>";
        }
      } else {
        // Jika update data pengembalian gagal
        echo "<script>alert('Pengembalian buku gagal!');</script>";
      }
    }
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>PENGEMBALIAN BUKU</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

<?php 
include 'navbar.php';
?>

<div class="container" style="margin-top:20px">
  <h2>Pengembalian Buku</h2>
  <hr>

  <form action="pengembalian.php" method="post">
    <div class="form-group">
      <label for="no_pinjam">Nomor Peminjaman:</label>
      <input type="text" class="form-control" id="no_pinjam" name="no_pinjam" required>
    </div>
    <div class="form-group">
      <label for="tanggal_kembali">Tanggal Kembali:</label>
      <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="index.php" class="btn btn-warning">KEMBALI</a>
  </form>

</div>

</body>
</html>

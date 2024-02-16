<?php
session_start();

// Cek apakah pengguna sudah login, jika tidak, redirect ke halaman login.php
if(!isset($_SESSION['username'])) {
    header("location: login.php");
    exit(); // Pastikan untuk menghentikan eksekusi kode selanjutnya setelah redirect
}

// Include file koneksi database
include('connect.php');
?>

<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Petugas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<div class="container" style="margin-top:20px">
    <h2>Tambah Petugas</h2>
    <hr>

    <?php
    if(isset($_POST['submit'])){
        // Ambil data dari form
        $id_petugas    = $_POST['id_petugas'];
        $nama_petugas  = $_POST['nama_petugas'];
        $pekerjaan     = $_POST['pekerjaan'];
        $sift          = $_POST['sift'];

        // Periksa apakah ID petugas sudah terdaftar
        $cek = mysqli_query($coneksi, "SELECT * FROM petugas WHERE id_petugas='$id_petugas'");
        if(mysqli_num_rows($cek) == 0){
            // Jika belum terdaftar, lakukan proses penyimpanan data
            $sql = mysqli_query($coneksi, "INSERT INTO petugas(id_petugas, nama_petugas, pekerjaan, sift) VALUES('$id_petugas', '$nama_petugas', '$pekerjaan', '$sift')");
            if($sql){
                echo '<div class="alert alert-success">Berhasil menambahkan data.</div>';
            }else{
                echo '<div class="alert alert-danger">Gagal melakukan proses tambah data.</div>';
            }
        }else{
            echo '<div class="alert alert-warning">ID petugas sudah terdaftar.</div>';
        }
    }
    ?>

    <form action="tambahpetugas.php" method="post">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">ID PETUGAS</label>
            <div class="col-sm-10">
                <input type="text" name="id_petugas" class="form-control" size="4" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">NAMA PETUGAS</label>
            <div class="col-sm-10">
                <input type="text" name="nama_petugas" class="form-control" size="4" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">PEKERJAAN</label>
            <div class="col-sm-10">
                <input type="text" name="pekerjaan" class="form-control" size="4" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">SIFT KERJA</label>
            <div class="col-sm-10">
                <input type="radio" name="sift" value="senin - rabu pagi, kamis - sabtu siang">Senin- Rabu Pagi,Kamis- Sabtu Siang<br>
                <input type="radio" name="sift" value="senin -  rabu siang, kamis - sabtu pagi">Senin- Rabu Siang, Kamis- Sabtu Pagi<br>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">&nbsp;</label>
            <div class="col-sm-10">
                <input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
            </div>
        </div>
    </form>
</div>
</body>
</html>

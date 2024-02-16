<?php
session_start();

// Cek apakah pengguna sudah login, jika tidak, redirect ke halaman login.php
if(!isset($_SESSION['username'])) {
    header("location: login.php");
}

// Sisanya adalah kode untuk menampilkan data petugas, seperti yang telah Anda buat sebelumnya
// ...
?>


<?php include('connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH PEMINJAM</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
</head>
<body>
	
<?php include 'navbar.php'; ?>
	
<div class="container" style="margin-top:20px">
	<h2>Tambah Peminjaman</h2>
	<hr>
	<form action="proses_tambahpinjam.php" method="post">
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">NIM</label>
			<div class="col-sm-10">
				<select name="nim" class="form-control" required>
					<option value="" disabled selected>Pilih NIM Pengunjung</option>
					<?php
					$query_nim = mysqli_query($coneksi, "SELECT * FROM pengunjung");
					while ($row_nim = mysqli_fetch_array($query_nim)) {
						echo '<option value="'.$row_nim['nim'].'">'.$row_nim['nim'].' - '.$row_nim['nama_pengunjung'].'</option>';
					}
					?>
				</select>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">ID Buku</label>
			<div class="col-sm-10">
				<select name="id_buku" class="form-control" required>
					<option value="" disabled selected>Pilih ID Buku</option>
					<?php
					$query_buku = mysqli_query($coneksi, "SELECT * FROM buku");
					while ($row_buku = mysqli_fetch_array($query_buku)) {
						echo '<option value="'.$row_buku['id_buku'].'">'.$row_buku['id_buku'].' - '.$row_buku['judul_buku'].'</option>';
					}
					?>
				</select>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">&nbsp;</label>
			<div class="col-sm-10">
				<br>
				<input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
				<input type="reset" name="reset" class="btn btn-warning" value="RESET">
			</div>
		</div>
	</form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>

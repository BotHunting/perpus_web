<?php include('connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    
    <div class="container" style="margin-top:20px">
        <h2>Edit Peminjaman</h2>
        
        <hr>
        
        <?php
        // Periksa apakah parameter no_pinjam ada dalam URL
        if(isset($_GET['no_pinjam'])){
            $no_pinjam = $_GET['no_pinjam'];
            
            // Query untuk mengambil data peminjaman berdasarkan no_pinjam
            $select = mysqli_query($coneksi, "SELECT * FROM pinjam WHERE no_pinjam='$no_pinjam'") or die(mysqli_error($coneksi));
            
            // Jika data tidak ditemukan, tampilkan pesan error
            if(mysqli_num_rows($select) == 0){
                echo '<div class="alert alert-warning">Nomor peminjaman tidak ditemukan dalam database.</div>';
                exit();
            } else {
                // Memasukkan data peminjaman ke dalam variabel $data
                $data = mysqli_fetch_assoc($select);
            }
        } else {
            // Jika parameter no_pinjam tidak ada, tampilkan pesan error
            echo '<div class="alert alert-danger">Parameter no_pinjam tidak ditemukan dalam URL.</div>';
            exit();
        }
        ?>
        
        <?php
        // Jika tombol simpan ditekan
        if(isset($_POST['submit'])){
            // Mengambil nilai dari form
            $tanggal_pinjam = $_POST['tanggal_pinjam'];
            $nim = $_POST['nim'];
            $id_buku = $_POST['id_buku'];
            
            // Melakukan query untuk mengupdate data peminjaman
            $sql = mysqli_query($coneksi, "UPDATE pinjam SET tanggal_pinjam='$tanggal_pinjam', nim='$nim', id_buku='$id_buku' WHERE no_pinjam='$no_pinjam'") or die(mysqli_error($coneksi));
            
            // Jika query berhasil, redirect ke halaman pinjam.php
            if($sql){
                echo '<script>alert("Berhasil menyimpan perubahan."); document.location="pinjam.php";</script>';
            } else {
                echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
            }
        }
        ?>
        
        <form action="editpinjam.php?no_pinjam=<?php echo $no_pinjam; ?>" method="post">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">TANGGAL PINJAM</label>
                <div class="col-sm-10">
                    <input type="date" name="tanggal_pinjam" class="form-control" value="<?php echo $data['tanggal_pinjam']; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <select name="nim" class="form-control" required>
                        <option value="" disabled selected>Pilih NIM Pengunjung</option>
                        <?php
                        $query_pengunjung = mysqli_query($coneksi, "SELECT * FROM pengunjung");
                        while ($row_pengunjung = mysqli_fetch_array($query_pengunjung)) {
                            $selected = ($row_pengunjung['nim'] == $data['nim']) ? 'selected' : '';
                            echo '<option value="'.$row_pengunjung['nim'].'" '.$selected.'>'.$row_pengunjung['nim'].' - '.$row_pengunjung['nama_pengunjung'].'</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">ID BUKU</label>
                <div class="col-sm-10">
                    <select name="id_buku" class="form-control" required>
                        <option value="" disabled selected>Pilih ID Buku</option>
                        <?php
                        $query_buku = mysqli_query($coneksi, "SELECT * FROM buku");
                        while ($row_buku = mysqli_fetch_array($query_buku)) {
                            $selected = ($row_buku['id_buku'] == $data['id_buku']) ? 'selected' : '';
                            echo '<option value="'.$row_buku['id_buku'].'" '.$selected.'>'.$row_buku['id_buku'].' - '.$row_buku['judul_buku'].'</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">&nbsp;</label>
                <div class="col-sm-10">
                    <input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
                    <a href="pinjam.php" class="btn btn-warning">KEMBALI</a>
                </div>
            </div>
        </form>
        
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>
</html>

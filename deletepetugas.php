<?php
//include file config.php
include('connect.php');

//jika benar mendapatkan GET id dari URL
if(isset($_GET['id_petugas'])){
    //membuat variabel $id yang menyimpan nilai dari $_GET['id']
    $id_petugas = $_GET['id_petugas'];

    //melakukan query ke database untuk mengecek keterkaitan petugas dengan pengunjung
    $cek_keterkaitan = mysqli_query($coneksi, "SELECT * FROM pengunjung WHERE id_petugas='$id_petugas'");
    
    // jika terdapat keterkaitan, tampilkan notifikasi
    if(mysqli_num_rows($cek_keterkaitan) > 0) {
        echo '<script>alert("Pengunjung Masih Ada, Petugas Wajib Menyelesaikan Tugasnya!!"); document.location="petugas.php";</script>';
    } else {
        //jika tidak terdapat keterkaitan, lanjutkan dengan proses penghapusan
        $del = mysqli_query($coneksi, "DELETE FROM petugas WHERE id_petugas='$id_petugas'");
        if($del){
            echo '<script>alert("Berhasil menghapus data."); document.location="petugas.php";</script>';
        }else{
            echo '<script>alert("Gagal menghapus data."); document.location="petugas.php";</script>';
        }
    }
} else {
    echo '<script>alert("id_petugas tidak ditemukan di database."); document.location="petugas.php";</script>';
}
?>

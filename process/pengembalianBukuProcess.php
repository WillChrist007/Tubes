<?php

session_start();
if (isset($_GET['id'])) {
    include('../db.php');

    $id_peminjaman = $_GET['id'];
    $queryPinjam = mysqli_query($con, "SELECT * FROM peminjaman WHERE id = '$id_peminjaman' ") or
    die(mysqli_error($con));
    $data = mysqli_fetch_assoc($queryPinjam);
    $id_buku = $data['id_buku']; 
    $status = 0;
    $queryPinjamTwo = mysqli_query($con, "SELECT * FROM buku WHERE id = '$id_buku' ") or
    die(mysqli_error($con));
    $dataTwo = mysqli_fetch_assoc($queryPinjamTwo);
    $sisa = $dataTwo['sisa'] + 1;
    $tgl_kembali = date('Y-m-d');


    $query = mysqli_query($con, "INSERT INTO pengembalian (id_peminjaman, tanggal_kembali) VALUES ('$id_peminjaman', '$tgl_kembali')")
    or die(mysqli_error($con));

    $queryUpdate = mysqli_query($con, "UPDATE `peminjaman` SET `status`='$status'  WHERE id='$id_peminjaman'") 
    or die(mysqli_error($con));
    
    $queryUpdateTwo = mysqli_query($con, "UPDATE `buku` SET `sisa`='$sisa' WHERE id='$id_buku'") 
    or die(mysqli_error($con));

    if ($query && $queryUpdate && $queryUpdateTwo) {
        echo
        '<script>
        alert("Sukses Mengembalikan Buku");
        window.location = "../page/user/pengembalianBukuPage.php"
        </script>';
    } else {
        echo
        '<script>
        alert("Gagal Mengembalikan Buku");
        </script>';
    }
} else {
    echo
    '<script>
    window.history.back()
    </script>';
}
?>
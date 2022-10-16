<?php

session_start();
if (isset($_POST['confirm'])) {
    include('../db.php');

    $user = $_SESSION['user'];
    $id_user = $user['id'];
    $id_buku = $id = $_SESSION['book']['id']; 
    $status = 1;
    $sisa = $_SESSION['book']['sisa'] - 1;
    $tgl_pinjam = date('Y-m-d');


    $query = mysqli_query($con, "INSERT INTO peminjaman (id_user, id_buku, tanggal_pinjam, status) VALUES ('$id_user', '$id_buku', '$tgl_pinjam', '$status')")
    or die(mysqli_error($con));

    $queryUpdate = mysqli_query($con, "UPDATE `buku` SET `sisa`='$sisa' WHERE id='$id_buku'") 
    or die(mysqli_error($con)); 

    if ($query && $queryUpdate) {
        echo
        '<script>
        alert("Sukses Meminjam Buku");
        window.location = "../page/user/listBukuPage.php"
        </script>';
    } else {
        echo
        '<script>
        alert("Gagal Meminjam Buku");
        </script>';
    }
} else {
    echo
    '<script>
    window.history.back()
    </script>';
}
?>
<?php
session_start();
if (isset($_GET['id'])) {
    include('../db.php');
    $id = $_GET['id'];
    $queryDelete = mysqli_query($con, "DELETE FROM buku WHERE id='$id'") or
        die(mysqli_error($con));
    if ('stock'=='sisa') {
        echo
            '<script>
            alert("Delete Success"); window.location = "../page/admin/listBukuPage.php"
            </script>';
    } else {
        echo
            '<script>
            alert("Delete Failed"); window.location = "../page/admin/listBukuPage.php"
            </script>';
    }
} else {
    echo
        '<script>
        window.history.back()
        </script>';
}
?>

<!-- EDIT di bagian nomor 6 -->
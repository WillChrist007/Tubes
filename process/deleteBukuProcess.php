<?php
session_start();
if (isset($_GET['id'])) {
    include('../db.php');
    $id = $_GET['id'];

    $querySelect = mysqli_query($con, "SELECT * FROM buku WHERE id='$id'") or die(mysqli_error($con));
    
    $book = mysqli_fetch_assoc($querySelect);
    $_SESSION['book'] = $book;

    $stock = $_SESSION['book']['stock'];
    $sisa = $_SESSION['book']['sisa'];
    
    if ($stock == $sisa) {
        $queryDelete = mysqli_query($con, "DELETE FROM buku WHERE id='$id'") or
        die(mysqli_error($con));
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
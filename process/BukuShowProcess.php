<?php
session_start();
if (isset($_GET['id'])) {
    include('../db.php');
    $id = $_GET['id'];
    $querySelect = mysqli_query($con, "SELECT * FROM buku WHERE id='$id'") or
        die(mysqli_error($con));
    if ($querySelect) {
        $book = mysqli_fetch_assoc($querySelect);
        $_SESSION['book'] = $book;
        echo
            '<script>
               window.location = "../page/admin/editBukuPage.php"
            </script>';
    } else {
        echo
        '<script>
            alert("Failed to Show"); window.location = "../page/admin/listBukuPage.php"
        </script>';
    }
} else {
    echo
    '<script>
            window.history.back()
            </script>';
}
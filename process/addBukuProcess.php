<?php

if (isset($_POST['add'])) {
    include('../db.php');

    $judul = $_POST['judul'];
    $penerbit = $_POST['penerbit'];
    $pengarang = $_POST['pengarang'];
    $stock = $_POST['stock'];
    $sisa = $_POST['stock'];

    $gambar = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../img/cover/" . $gambar;

    if(move_uploaded_file($tempname, $folder)) {
        echo "<h3> Gambar Berhasil Diupload! </h3>";
    } else {
        echo "<h3> Gambar Gagal Diupload! </h3>";
    }

    $query = mysqli_query($con, "INSERT INTO buku (judul, gambar, penerbit, pengarang, stock, sisa)
    VALUES ('$judul', '$gambar', '$penerbit', '$pengarang', '$stock', '$sisa')")
    or die(mysqli_error($con));

    if ($query) {
        echo
        '<script>
        alert("Sukses Menambah Buku");
        window.location = "../page/admin/listBukuPage.php"
        </script>';
    } else {
        echo
        '<script>
        alert("Gagal Menambah Buku");
        </script>';
    }
} else {
    echo
    '<script>
    window.history.back()
    </script>';
}
?>
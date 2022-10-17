<?php

if (isset($_POST['add'])) {
    include('../db.php');

    $pekerjaan = $_POST['pekerjaan'];
    $asal = $_POST['asal'];
    $lokasi = $_POST['lokasi'];
    $syarat = $_POST['syarat'];
    $kontak = $_POST['kontak'];

    $output="";

    foreach ($asal as $oneGenre) {
        $output.= $oneGenre;
        $output.= ", ";
    }

    $query = mysqli_query($con, "INSERT INTO loker(pekerjaan, asal, lokasi, syarat, kontak)
    VALUES ('$pekerjaan', '$output', '$lokasi', '$syarat', '$kontak')")
    or die(mysqli_error($con));

    if ($query) {
        echo
        '<script>
        alert("Add LoKer Success");
        window.location = "../page/admin/listLokerPage.php"
        </script>';
    } else {
        echo
        '<script>
        alert("Add LoKer Failed");
        </script>';
    }
} else {
    echo
    '<script>
    window.history.back()
    </script>';
}
?>
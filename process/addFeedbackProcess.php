<?php

session_start();
if (isset($_POST['add'])) {
    include('../db.php');

    $isi_saran = $_POST['isi_saran'];
    $user = $_SESSION['user'];
    $id_user = $user['id'];
    $status = 1;  


    $query = mysqli_query($con, "INSERT INTO feedback (id_user, isi_saran, status)
    VALUES ('$id_user', '$isi_saran', '$status')")
    or die(mysqli_error($con));

    if ($query) {
        echo
        '<script>
        alert("Sukses Menambah Feedback");
        window.location = "../page/user/listFeedbackPage.php"
        </script>';
    } else {
        echo
        '<script>
        alert("Gagal Menambah Feedback");
        </script>';
    }
} else {
    echo
    '<script>
    window.history.back()
    </script>';
}
?>
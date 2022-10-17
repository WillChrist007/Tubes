<?php
session_start();
if (isset($_GET['id'])) {
    include('../db.php');
    $id = $_GET['id'];
    $querySelect = mysqli_query($con, "SELECT * FROM feedback WHERE id='$id'") or
        die(mysqli_error($con));
    if ($querySelect) {
        $feedBack = mysqli_fetch_assoc($querySelect);
        $_SESSION['feedback'] = $feedBack;
        echo
            '<script>
               window.location = "../page/user/editFeedbackPage.php"
            </script>';
    } else {
        echo
        '<script>
            alert("Failed to Show"); window.location = "../page/user/listBukuPage.php"
        </script>';
    }
} else {
    echo
    '<script>
            window.history.back()
            </script>';
}
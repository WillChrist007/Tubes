<?php

if (isset($_POST['register'])) {

    include('../db.php');

    $testUsername = $_POST['username'];
    $testEmail = $_POST['email'];
    $testPhone = $_POST['telepon'];


    $result = mysqli_query($con, "SELECT id FROM user WHERE username = '$testUsername' OR email = '$testEmail' OR telepon = '$testPhone'") or die (mysqli_error($con));

    if($result->num_rows == 0) {
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $telepon = $_POST['telepon'];
        $alamat = $_POST['alamat'];
    } else {
        echo '
        <script>
        alert("Register Failed (Username / Email / Phone Number Already Taken)");
        window.location = "../index.php"
        </script>';
    }    

    $query = mysqli_query($con, "INSERT INTO user(username, password, nama, email, telepon, alamat)
    VALUES ('$username', '$password', '$nama', '$email', '$telepon', '$alamat')")
    or die(mysqli_error($con));

    if ($query) {
        echo
        '<script>
        alert("Register Success");
        window.location = "../index.php"
        </script>';
    } else {
        echo
        '<script>
        alert("Register Failed");
        </script>';
    }
} else {
    echo
    '<script>
    window.history.back()
    </script>';
}
?>
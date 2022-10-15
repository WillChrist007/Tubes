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

        $foto = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["temp_name"];
        $folder = "./img/profile/" . $foto;

        if(move_uploaded_file($tempname, $folder)) {
            echo "<h3> Foto Berhasil Diupload! </h3>";
        } else {
            echo "<h3> Foto Gagal Diupload! </h3>";
        }

    } else {
        echo '
        <script>
        alert("Register Failed (Username / Email / Phone Number Already Taken)");
        window.location = "../index.php"
        </script>';
    }    

    $query = mysqli_query($con, "INSERT INTO user(username, password, nama, foto, email, telepon, alamat)
    VALUES ('$username', '$password', '$nama', '$foto','$email', '$telepon', '$alamat')")
    or die(mysqli_error($con));

    if ($query) {
        echo
        '<script>
        alert("Register Success");
        window.location = "../page/loginPage.php"
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
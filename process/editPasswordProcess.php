<?php
    session_start();
    if(isset($_POST['Ganti'])){
        $username = $_POST['username'];
        $password_lama = $_POST['password_lama'];
        $password_baru = $_POST['password_baru'];
        $konf_password = $_POST['konf_password'];
    }

    $query = "SELECT*FROM user WHERE username='$username' AND password='$password_lama'";
    $sql = mysqli_query($query);
    $hasil = mysqli_num_rows($sql);
    if (! $hasil >= 1) {
        ?>
            <script language="JavaScript">
            alert('Password lama tidak sesuai!, silahkan ulang kembali!');
            document.location='index.php';
            </script>
        <?php
            unset($_SESSION['username']);
            session_destroy();
    } else if (empty($_POST['password_baru']) || empty($_POST['konf_password'])) {
        echo "<h3><font color=red>Edit Password Gagal! Data Tidak Boleh Kosong.</font></h3>";
    } else if (($_POST['password_baru']) != ($_POST['konf_password'])) {
        echo "<h3><font color=red><center>Ganti Password Gagal! Password dan Konfirm Password Harus Sama.</center></font></h3>";
    } else {   
        $query = "UPDATE login SET password='$password_baru' WHERE username='$username'";
        $sql = mysqli_query ($query);
    }
    
    if ($sql) {
        echo "<h3><font color=#8BB2D9><center>Ganti Password Berhasil!</center></font></h3>";    
    } else {
        echo "<h3><font color=red><center>Ganti Password Gagal!</center></font></h3>";    
    }
?>
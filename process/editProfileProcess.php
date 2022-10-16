<?php 
    session_start(); 
    

    if(isset($_POST['submit'])){ 
        include('../db.php');

        $testUsername = $_POST['username'];
        $testEmail = $_POST['email'];
        $testPhone = $_POST['telepon'];


        $result = mysqli_query($con, "SELECT id FROM user WHERE username = '$testUsername' OR email = '$testEmail' OR telepon = '$testPhone'") or die (mysqli_error($con));

        if($result->num_rows <= 1) {
            $id = $_SESSION['user']['id']; 
            $username = $_POST['username'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $telepon = $_POST['telepon'];
            $alamat = $_POST['alamat'];

            $foto = $_FILES["uploadfile"]["name"];
            $tempname = $_FILES["uploadfile"]["tmp_name"];
            $folder = "../img/profile/" . $foto;

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
        
        $query = mysqli_query($con, "UPDATE user SET nama='$nama', username='$username', email='$email', foto='$foto', telepon='$telepon', alamat='$alamat' WHERE id='$id'") or die(mysqli_error($con)); 
        
        if($query){ 
            $user = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM user WHERE id = '$id'"));
            $_SESSION['user'] = $user;
            echo 
                '<script> 
                    alert("Edit Success"); window.location = "../page/user/profilePage.php" 
                </script>'; 
        }
        else{ 
            echo 
                '<script> 
                    alert("Edit Failed"); window.location = "../editProfilePage.php" 
                </script>'; 
        } 
    }
    else{ 
        echo 
            '<script> 
                alert("Edit Failed");
                window.history.back() 
            </script>'; 
    } 
?>
<?php 
    session_start(); 
    

    if(isset($_POST['submit'])){ 
        include('../db.php');
        
        $id = $_SESSION['user']['id']; 
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $query = mysqli_query($con, "UPDATE user SET password='$password' WHERE id='$id'") or die(mysqli_error($con)); 
        
        if($query){ 
            $user = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM user WHERE id = '$id'"));
            $_SESSION['user'] = $user;
            echo 
                '<script> 
                    alert("Edit Success"); window.location = "../page/admin/listBukuPage.php" 
                </script>'; 
        }
        else{ 
            echo 
                '<script> 
                    alert("Edit Failed"); window.location = "../editPasswordPage.php" 
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
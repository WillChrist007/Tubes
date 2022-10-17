<?php 
    session_start();
    if(isset($_POST['submit'])){ 
        include('../db.php'); 

        $id = $_SESSION['feedback']['id']; 
        $isi_saran = $_POST['isi_saran'];
        $id_user = $_SESSION['user']['id'];
        $status = 1;  
        
        $queryUpdate = mysqli_query($con, "UPDATE `feedback` SET `id_user`='$id_user',`isi_saran`='$isi_saran', `status`='$status' WHERE id='$id'") 
        or die(mysqli_error($con));
        
        if($queryUpdate){
            echo 
                '<script> 
                    alert("Edit Success"); 
                    window.location = "../page/user/listFeedbackPage.php" 
                </script>'; 
        }
        else{ 
            echo 
                '<script> 
                    alert("Edit Failed"); 
                    window.location = "../page/user/listFeedbackPage.php" 
                </script>'; 
        } 
    }else{ 
        echo 
            '<script> 
                alert("Edit Failed");
                window.history.back() 
            </script>'; 
    } 
?>
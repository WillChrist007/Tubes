<?php 

    if(isset($_GET['id'])){ 
        include('../db.php'); 

        $id = $_GET['id']; 
        $status = 0;  
        
        $queryUpdate = mysqli_query($con, "UPDATE `feedback` SET  `status`='$status' WHERE id='$id'") 
        or die(mysqli_error($con));
        
        if($queryUpdate){
            echo 
                '<script> 
                    alert("Confirm Feedback Success"); 
                    window.location = "../page/admin/confirmFeedbackPage.php" 
                </script>'; 
        }
        else{ 
            echo 
                '<script> 
                    alert("Confirm Feedback Failed"); 
                    window.location = "../page/admin/confirmFeedbackPage.php"
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
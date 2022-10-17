<?php 
    
    if(isset($_POST['submit'])){ 
        include('../db.php'); 

        $id = $_POST['id']; 
        $pekerjaan = $_POST['pekerjaan']; 
        $asal = $_POST['asal']; 
        $lokasi = $_POST['lokasi'];  
        $syarat = $_POST['syarat'];  
        $kontak = $_POST['kontak']; 
        
        $query = mysqli_query($con, "UPDATE loker SET pekerjaan='$pekerjaan', asal='$asal', lokasi='$lokasi', syarat='$syarat', kontak='$kontak' WHERE id='$id'") or die(mysqli_error($con)); 
        
        if($query){
            echo 
                '<script> 
                    alert("Edit Success"); window.location = "../page/admin/listLokerPage.php" 
                </script>'; 
        }
        else{ 
            echo 
                '<script> 
                    alert("Edit Failed"); window.location = "../page/admin/editLokerPage.php" 
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
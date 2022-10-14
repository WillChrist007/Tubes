<?php 
    session_start();
    if(isset($_POST['submit'])){ 
        include('../db.php'); 

        $id = $_SESSION['book']['id']; 
        $judul = $_POST['judul']; 
        $gambar = $_POST['gambar']; 
        $stock = $_POST['stock'];  

        // foreach ($genre as $oneGenre) {
        //     $output.= $oneGenre;
        //     $output.= ", ";
        // }
        
        $queryUpdate = mysqli_query($con, "UPDATE `buku` SET `judul`='$judul',`gambar`='$gambar',`stock`='$stock' WHERE id='$id'") 
        or die(mysqli_error($con)); 
        
        if($queryUpdate){
            echo 
                '<script> 
                    alert("Edit Success"); 
                    window.location = "../page/admin/listBukuPage.php" 
                </script>'; 
        }
        else{ 
            echo 
                '<script> 
                    alert("Edit Failed"); 
                    window.location = "../page/admin/editBukuPage.php" 
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
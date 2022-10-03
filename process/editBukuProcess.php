<?php 
    
    if(isset($_POST['submit'])){ 
        include('../db.php'); 

        $id = $_POST['id']; 
        $name = $_POST['name']; 
        $genre = $_POST['genre']; 
        $realese = $_POST['realese'];  
        $episode = $_POST['episode'];  
        $season = $_POST['season']; 

        foreach ($genre as $oneGenre) {
            $output.= $oneGenre;
            $output.= ", ";
        }
        
        $query = mysqli_query($con, "UPDATE series SET name='$name', genre='$output', realese='$realese', episode='$episode', season='$season' WHERE id='$id'") or die(mysqli_error($con)); 
        
        if($query){
            echo 
                '<script> 
                    alert("Edit Success"); window.location = "../page/listSeriesPage.php" 
                </script>'; 
        }
        else{ 
            echo 
                '<script> 
                    alert("Edit Failed"); window.location = "../editSeriePage.php" 
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
<?php
    include '../../component/userSidebar.php'
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
    solid SaddleBrown; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="body d-flex justify-content-between">
        <h4>EDIT FEEDBACK</h4>
    </div>
    <hr>
    <tbody>
        <?php
        include '../../db.php';

        $id = $_SESSION['feedback']['id'];
        $query = mysqli_query($con, "SELECT * FROM feedback WHERE id = '$id'") or die(mysqli_error($con));
        $feedback  = mysqli_fetch_assoc($query);
        echo'
        <form action="../../process/feedbackProcess.php" method="post">

            <div class="mb-3"> 
                        <label for="exampleInputEmail1" class="form-label">Feedback</label> 
                        <textarea class="form-control" id="isi_saran" name="isi_saran" aria-describedby="emailHelp" value="'.$feedback['isi_saran'].'"></textarea> 
            </div>

            <br><br>

            <div class="d-grid gap-2">
                <button type="submit" href="../../process/feedbackProcess.php" class="btn btn-primary" name="submit">Submit</button>
            </div>
        </form>'
        ?>
    </tbody>
    
</div>
</aside>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<!-- <script>

    $(document).ready(function () {

        $("#genre").select2({

            placeholder: " genre"

        });

    });
</script> -->

</body>

</html>
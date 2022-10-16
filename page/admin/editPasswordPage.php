<?php
    include '../../component/adminSidebar.php'
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
    solid SaddleBrown; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="body d-flex justify-content-between">
        <h4>EDIT PASSWORD</h4>
    </div>
    <hr>
    <tbody>
        <?php
        include '../../db.php';
        if(isset($_GET['username'])){
            $username=$_GET['username'];
        }else{
            die("Error. No ID Selected!");
        }
        echo'
        <form action="../process/loginProcess.php" method="post">
            <div class="mb-3">
                <label for="username" class="formlabel">Username</label>
                <input class="form-control" id="username" name="username" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="password_lama" class="formlabel">Password lama</label>
                <input type="password_lama" class="form-control" id="password_lama" name="password_lama">
            </div>
            <div class="mb-3">
                <label for="password_baru" class="formlabel">Password baru</label>
                <input type="password_baru" class="form-control" id="password_baru" name="password_baru">
            </div>
            <div class="mb-3">
                <label for="konf_password" class="formlabel">Konfirmasi password</label>
                <input type="konf_password" class="form-control" id="konf_password" name="konf_password">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="Ganti">Edit</button>
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



</body>

</html>
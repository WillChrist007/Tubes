<?php
    include '../../component/adminSidebar.php'
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
    solid SaddleBrown; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="body d-flex justify-content-between">
        <h4>EDIT BUKU</h4>
    </div>
    <hr>
    <tbody>
        <?php
        include '../../db.php';

        $id = $_GET['id'];
        $query = mysqli_query($con, "SELECT * FROM buku WHERE id = '$id'") or die(mysqli_error($con));
        $buku = mysqli_fetch_assoc($query);
        echo'
        <form action="../../process/editBukuProcess.php" method="post">
            <div class="field">
            <label for="exampleInputEmail1" class="form-label">Judul</label>
                <div class="control">
                    <input class="form-control" name="judul" aria-describedby="emailHelp" id="judul" value="'.$buku['judul'].'">
                </div>
            </div>
            <br>

            <div class="field">
                <label class="label">Sampul</label>
                <div class="control">
                    <input class="form-control" name="gambar" aria-describedby="emailHelp" id="gambar" type="file" accept="image/*" value="'.$buku['gambar'].'">
                </div>
            </div>
            <br>

            <div class="field">
                <label class="label">Stock</label>
                <div class="control">
                <input class="form-control" name="stock" aria-describedby="emailHelp" id="stock" value="'.$buku['stock'].'">
                </div>
            </div>
            <br>
            
            <br><br>

            <div class="d-grid gap-2">
                <button type="submit" href="../../process/editBukuProcess.php" class="btn btn-primary" name="submit">Submit</button>
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

<script>

    $(document).ready(function () {

        $("#genre").select2({

            placeholder: " genre"

        });

    });
</script>

</body>

</html>
<?php
    include '../../component/adminSidebar.php';
    include '../../db.php';

    $id = $_GET['id'];
    $query = mysqli_query($con, "SELECT * FROM loker WHERE id='$id'") or die(mysqli_error($con));
    $data = mysqli_fetch_assoc($query);
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
    solid saddlebrown; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="body d-flex justify-content-between">
        <h4>EDIT LOWONGAN PEKERJAAN</h4>
    </div>
    <hr>
    <form action="../../process/editLokerProcess.php" method="post">
    <input type="hidden" value="<?php echo $data['id'];?>" name="id">
            <div class="mb-3"> 
                        <label for="exampleInputEmail1" class="form-label">Pekerjaan</label> 
                        <input class="form-control" id="pekerjaan" name="pekerjaan" aria-describedby="emailHelp" value="<?php echo $data['pekerjaan']; ?>"> 
            </div>

            <div class="mb-3"> 
                        <label for="exampleInputEmail1" class="form-label">Asal</label> 
                        <input class="form-control" id="gambar" type="text" name="asal" aria-describedby="emailHelp" value="<?php echo $data['asal']; ?>"> 
            </div>

            <div class="mb-3"> 
                        <label for="exampleInputEmail1" class="form-label">Lokasi</label> 
                        <input class="form-control" id="lokasi" name="lokasi" aria-describedby="emailHelp" value="<?php echo $data['lokasi']; ?>"> 
            </div>
            
            <div class="mb-3"> 
                        <label for="exampleInputEmail1" class="form-label">Syarat</label> 
                        <input class="form-control" id="syarat" name="syarat" aria-describedby="emailHelp" value="<?php echo $data['syarat']; ?>"> 
            </div>

            <div class="mb-3"> 
                        <label for="exampleInputEmail1" class="form-label">Kontak</label> 
                        <input class="form-control" id="kontak" name="kontak" aria-describedby="emailHelp" value="<?php echo $data['kontak']; ?>"> 
            </div>
        <br><br>

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div>

    </form>
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
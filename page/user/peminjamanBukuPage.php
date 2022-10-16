<?php
    include '../../component/userSidebar.php'
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
    solid SaddleBrown; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="body d-flex justify-content-between">
        <h4>Pinjam BUKU</h4>
    </div>
    <hr>
    <tbody>
        <?php
        include '../../db.php';

        $id = $_SESSION['book']['id'];
        $query = mysqli_query($con, "SELECT * FROM buku WHERE id = '$id'") or die(mysqli_error($con));
        $book  = mysqli_fetch_assoc($query);
        $tgl_pinjam = date('Y-m-d');
        $tgl_kembali = date( "Y-m-d", strtotime( "$tgl_pinjam +7 day" ) );
        echo'
        <form action="../../process/peminjamanBukuProcess.php" method="post">

            <div class="mb-3"> 
                <label for="exampleInputEmail1" class="form-label">Judul</label> 
                <input class="form-control" id="judul" name="judul" aria-describedby="emailHelp" value="'.$book['judul'].'" disabled> 
            </div>

            <div class="mb-3"> 
                    <label for="exampleInputEmail1" class="form-label">Cover</label> 
            </div>

            <div class="mb-3"> 
                <img src = ../../img/cover/' . $book['gambar'] .' style="height: 220px; width: 150px; border-radius: 5px"> 
            </div>

            <div class="mb-3"> 
                    <label for="exampleInputEmail1" class="form-label">Pengarang</label> 
                    <input class="form-control" id="tanggal_kembali" name="tanggal_kembali" aria-describedby="tanggalKembaliHelp" value=" '.$book['pengarang'].' " disabled> 
            </div>

            <div class="mb-3"> 
                    <label for="exampleInputEmail1" class="form-label">Penerbit</label> 
                    <input class="form-control" id="tanggal_kembali" name="tanggal_kembali" aria-describedby="tanggalKembaliHelp" value=" '.$book['penerbit'].' " disabled> 
            </div>

            <div class="mb-3"> 
                        <label for="exampleInputEmail1" class="form-label">Batas Tanggal Pengembalian</label> 
                        <input class="form-control" id="tanggal_kembali" name="tanggal_kembali" aria-describedby="tanggalKembaliHelp" value=" '.$tgl_kembali.' " disabled> 
            </div>

            <br><br>

            <div class="d-grid gap-2">
                <button type="submit" href="../../process/editBukuProcess.php" class="btn btn-primary" name="confirm">Confirm Peminjaman</button>
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
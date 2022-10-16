<?php
include '../../component/adminSidebar.php'
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
solid SaddleBrown; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
0.19);">
    <div class="body d-flex justify-content-between">
        <h4>LIST BUKU</h4>
        <a href="../admin/addBukuPage.php"><i style="color: SaddleBrown" class="bi bi-plus-square-fill"> Tambah Buku</i></a>
    </div>
    <hr>
    <table class="table ">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Sampul</th>
                <th scope="col">Status</th>
                <th scope="col">Tanggal Pengembalian</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = mysqli_query($con, "SELECT * FROM buku") or
                die(mysqli_error($con));
                if (mysqli_num_rows($query) == 0) {
                    echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>';
                }else{
                    $no = 1;
                    while($data = mysqli_fetch_assoc($query)){
                    echo'
                        <tr>
                            <th scope="row">'.$no.'</th>
                            <td>'.$data['judul'].'</td>
                            <td><img src = ../../img/cover/' . $data['gambar'] .' style="height: 220px; width: 150px; border-radius: 5px"></td>
                            <td>'.$data['status'].'</td>
                            <td>'.$data['tgl_kembali'].'</td>
                            <td>
                                <a href="../../process/pengembalianBukuProcess.php?id='.$data['id'].'
                                "onClick="return confirm ( \'Are you sure want to return the book?\')"> 
                                    <i style="color: red" class="bi bi-trash3-fill"></i>
                            </td>
                        </tr>';
                    $no++;
                }
                }
            ?>
        </tbody>
    </table>
</div>
</aside>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>

</html>
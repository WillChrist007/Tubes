<?php
include '../../component/userSidebar.php'
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
solid SaddleBrown; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
0.19);">
    <div class="body d-flex justify-content-between">
        <h4>LIST BUKU</h4>
    </div>
    <hr>
    <table class="table ">
        <thead>
            <tr>
                <th scope="col">Nama Buku</th>
                <th scope="col">Sampul</th>
                <th scope="col">Jumlah Tersedia</th>
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
                    if($data['sisa'] > 0 ){
                        echo'
                        <tr>
                            <th scope="row">'.$data['judul'].'</td>
                            <td><img src = ../../img/cover/' . $data['gambar'] .' style="height: 220px; width: 150px; border-radius: 5px"></td>
                            <td>'.$data['sisa'].'</td>
                            <td>
                                <a href="../../process/PeminjamanBukuShowProcess.php?id='.$data['id'].'
                                    "onClick="return confirm ( \'Are you sure want to borrow this book?\')">
                                        <i style="color: green" class="fa fa-book-open"></i>
                                </a>
                        </tr>';
                    }else{
                        echo'
                        <tr>
                            <th scope="row">'.$data['judul'].'</td>
                            <td><img src = ../../img/cover/' . $data['gambar'] .' style="height: 220px; width: 150px; border-radius: 5px"></td>
                            <td>'.$data['sisa'].'</td>
                            <td>
                                <a href="#" id="pinjamButton">
                                        <i style="color: green" class="fa fa-book-open"></i>
                                </a>
                        </tr>';
                    }
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
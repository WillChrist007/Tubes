<?php
include '../../component/userSidebar.php'
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
solid SaddleBrown; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
0.19);">
    <div class="body d-flex justify-content-between">
        <h4>LIST BUKU PEMINJAMAN</h4>
    </div>
    <hr>
    <table class="table ">
        <thead>
            <tr>
                <th scope="col">Nama Buku</th>
                <th scope="col">Sampul</th>
                <th scope="col">Status</th>
                <th scope="col">Batas Tanggal Pengembalian</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $id_user = $_SESSION['user']['id'];
                $query = mysqli_query($con, "SELECT * FROM peminjaman WHERE id_user = '$id_user'") or
                die(mysqli_error($con));
                if (mysqli_num_rows($query) == 0) {
                    echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>';
                }else{
                    $no = 1;
                    while($data = mysqli_fetch_assoc($query)){  
                    $id_buku = $data['id_buku'];
                    $queryTwo = mysqli_query($con, "SELECT * FROM buku WHERE id = '$id_buku' ") or
                     die(mysqli_error($con));     
                    if($queryTwo){
                        $dataTwo = mysqli_fetch_assoc($queryTwo);
                        $tgl_pinjam = $data['tanggal_pinjam'];
                        $tgl_kembali = date( "Y-m-d", strtotime( "$tgl_pinjam +7 day" ) );
                        if($data['status'] == 1){
                        echo'
                        <tr>
                            <th scope="row">'.$dataTwo['judul'].'</td>
                            <td><img src = ../../img/cover/' . $dataTwo['gambar'] .' style="height: 220px; width: 150px; border-radius: 5px"></td>
                            <td>Dipinjam</td>
                            <td>'.$tgl_kembali.'</td>
                            <td>
                                <a href="../../process/pengembalianBukuProcess.php?id='.$data['id'].'
                                    "onClick="return confirm ( \'Are you sure want to restore this book?\')">
                                    <button type="submit" class="btn btn-primary" name="pinjam">Kembalikan</button>  
                                </a>
                            </td>    
                        </tr>';
                        }else{
                        echo'
                        <tr>
                            <th scope="row">'.$dataTwo['judul'].'</td>
                            <td><img src = ../../img/cover/' . $dataTwo['gambar'] .' style="height: 220px; width: 150px; border-radius: 5px"></td>
                            <td>Sudah Dikembalikan</td>
                            <td>'.$tgl_kembali.'</td>
                            <td>
                                <a class="btn btn-primary disabled">
                                    Kembalikan 
                                </a>
                            </td>    
                        </tr>';
                        }
                    }else{
                        echo'<script>
                        alert("Gagal Mengakses Data");
                        </script>';
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
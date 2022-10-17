<?php
include '../../component/adminSidebar.php'
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
solid SaddleBrown; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
0.19);">
    <div class="body d-flex justify-content-between">
        <h4>LIST PEMINJAM</h4>
    </div>
    <hr>
    <table class="table ">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Username Peminjam</th>
                <th scope="col">Nama Buku</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = mysqli_query($con, "SELECT `user`.`username`, `peminjaman`.`status`, `buku`.`judul` FROM `buku` 
                LEFT JOIN `peminjaman` ON `peminjaman`.`id_buku` = `buku`.`id` LEFT JOIN `user` ON `peminjaman`.`id_user` = `user`.`id` 
                WHERE (`peminjaman`.`status`= 1)") or
                die(mysqli_error($con));
                if (mysqli_num_rows($query) == 0) {
                    echo '<tr> <td colspan="7"> Tidak ada buku yang sedang dipinjam </td> </tr>';
                }else{
                    $no = 1;
                    while($data = mysqli_fetch_assoc($query)){
                        echo'
                            <tr>
                                <th scope="row">'.$no.'</th>
                                <td>'.$data['username'].'</td>
                                <td>'.$data['judul'].'</td>
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
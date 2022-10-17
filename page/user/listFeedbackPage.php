<?php
include '../../component/userSidebar.php'
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
solid SaddleBrown; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
0.19);">
    <div class="body d-flex justify-content-between">
        <h4>LIST FEEDBACK</h4>
        <a href="../user/addFeedbackPage.php"><i style="color: blue" class="bi bi-plus-square-fill"> Tambah Feedback</i></a>
    </div>
    <hr>
    <table class="table ">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Isi Feedback</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = mysqli_query($con, "SELECT * FROM feedback") or
                die(mysqli_error($con));
                if (mysqli_num_rows($query) == 0) {
                    echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>';
                }else{
                    $no = 1;
                    while($data = mysqli_fetch_assoc($query)){
                    if($data['status'] == 1){
                        echo'
                        <tr>
                            <th scope="row">'.$no.'</th>
                            <td>'.$data['isi_saran'].'</td>
                            <td>Feedback Belum Dibaca</td>
                            <td>
                                <a href="../../process/deleteFeedbackProcess.php?id='.$data['id'].'
                                "onClick="return confirm ( \'Are you sure want to delete this data?\')"> 
                                    <i style="color: red" class="bi bi-trash3-fill"></i>

                                <a href="../../process/FeedbackShowProcess.php?id='.$data['id'].'
                                "onClick="return confirm ( \'Are you sure want to edit this data?\')">
                                    <i style="color: blue" class="bi bi-pencil-fill"></i>
                                </a>
                            </td>
                        </tr>';
                    }else{
                        echo'
                        <tr>
                            <th scope="row">'.$no.'</th>
                            <td>'.$data['isi_saran'].'</td>
                            <td>Feedback Telah Dibaca</td>
                            <td>
                                <a href="../../process/deleteFeedbackProcess.php?id='.$data['id'].'
                                "onClick="return confirm ( \'Are you sure want to delete this data?\')"> 
                                    <i style="color: red" class="bi bi-trash3-fill"></i>
                                </a>
                            </td>
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
<?php
include '../../component/userSidebar.php'
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
    solid SaddleBrown; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="body d-flex justify-content-between">
        <h4>ADD FEEDBACK</h4>
    </div>
    <hr>
    <!-- PROFILE -->
    <form action="../../process/addFeedbackProcess.php" method="post" enctype="multipart/form-data">
        <div class="field">
            <label class="label">Isi Saran</label>
            <div class="control">
            <input class="form-control" name="isi_saran" type="text">
            </div>
        </div>
        <br><br>

        <div class="d-grid gap-2">
            <button type="add" class="btn btn-primary" name="add">Add</button>
        </div>

    </form>
</div>
</aside>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

</body>

</html>
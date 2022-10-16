<?php
include '../../component/userSidebar.php'
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
    solid saddlebrown; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="body d-flex justify-content-between">
        <h4>PROFILE</h4>
    </div>
    <hr>
    <!-- PROFILE -->
    <form action="../../process/editProfileProcess.php" method="post" enctype="multipart/form-data">
        <div class="field">
            <label class="label">Nama</label>
            <div class="control">
                <input class="form-control" name="nama" type="text"  value="<?php echo $_SESSION['user']['nama']; ?>">
            </div>
        </div>
        <br>

		<div class="field">
			<label class="label">Username</label>
			<div class="control">
				<input class="form-control" name="username" type="text"  value="<?php echo $_SESSION['user']['username'];?>">
			</div>
		</div>
		<br>

		<div class="field">
			<label class="label">Password</label>
			<div class="control">
				<input class="form-control" name="password" type="password">
			</div>
		</div>
		<br>

        <div class="field">
			<label class="label">Photo</label>
			<div class="control">
				<input class="form-control" name="uploadfile" type="file" accept="image/*" value="<?php echo $_SESSION['user']['foto'];?>">
			</div>
		</div>
		<br>

		<div class="field">
			<label class="label">Email</label>
			<div class="control">
				<input class="form-control" name="email" type="text"  value="<?php echo $_SESSION['user']['email']; ?>">
			</div>
		</div>
		<br>

        <div class="field">
			<label class="label">Alamat</label>
			<div class="control">
				<input class="form-control" name="alamat" type="text"  value="<?php echo $_SESSION['user']['alamat']; ?>">
			</div>
		</div>
		<br>

        <div class="field">
            <label class="label">Nomor Telepon</label>
            <div class="control">
                <input class="form-control" name="telepon" type="number"  value="<?php echo $_SESSION['user']['telepon']; ?>">
            </div>
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
</body>

</html>
<?php
include '../../component/userSidebar.php'
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
    solid SaddleBrown; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="body d-flex justify-content-between">
        <h4>PROFILE</h4>
		<a href="../user/editProfilePage.php"><i style="color: blue" class="bi bi-pencil-square"> Edit Profile</i></a>     
    </div>
    <hr>
    <!-- PROFILE -->
	
    <form>
		<div style="display:flex; justify-content:center;">
			<img class='rounded-circle' src ="../../img/profile/<?php echo $_SESSION ['user']['foto']; ?>" style="border-radius: 5px;">
		</div>
		<br>

        <div class="field">
            <label class="label">Nama</label>
            <div class="control">
                <input class="form-control" name="nama" type="text" disabled value="<?php echo $_SESSION['user']['nama']; ?>">
            </div>
        </div>
        <br>

		<div class="field">
			<label class="label">Username</label>
			<div class="control">
				<input class="form-control" name="username" type="text" disabled value="<?php echo $_SESSION['user']['username'];?>">
			</div>
		</div>
		<br>

		<div class="field">
			<label class="label">Password</label>
			<div class="control">
				<input class="form-control" name="password" type="password" disabled value="<?php echo $_SESSION['user']['password'];?>">
			</div>
		</div>
		<br>

		<div class="field">
			<label class="label">Email</label>
			<div class="control">
				<input class="form-control" name="email" type="text" disabled value="<?php echo $_SESSION['user']['email']; ?>">
			</div>
		</div>
		<br>

		<div class="field">
			<label class="label">Alamat</label>
			<div class="control">
				<input class="form-control" name="alamat" type="text" disabled value="<?php echo $_SESSION['user']['alamat']; ?>">
			</div>
		</div>
		<br>

        <div class="field">
            <label class="label">Nomor Telepon</label>
            <div class="control">
                <input class="form-control" name="telepon" type="number" disabled value="<?php echo $_SESSION['user']['telepon']; ?>">
            </div>
        </div>
        <br>		
    </form>
</div>
</aside>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>

</html>
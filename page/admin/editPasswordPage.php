<?php
include '../../component/adminSidebar.php'
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
    solid SaddleBrown; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="body d-flex justify-content-between">
        <h4>PROFILE</h4>
		<a href="../user/editProfilePage.php"><i style="color: blue" class="bi bi-pencil-square"> Edit Profile</i></a>     
    </div>
    <hr>	
    <form action="../../process/editPasswordProcess.php" method="post" enctype="multipart/form-data">
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
				<input class="form-control" name="password" type="password">
			</div>
		</div>
		<br>

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" name="submit">Edit Password</button>
        </div>
    </form>
</div>
</aside>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>

</html>
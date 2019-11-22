<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-light" style="background-color: lightskyblue;"	>
	  <a class="navbar-brand" href="#">
	    <img src="login.png" width="30" height="30" class="d-inline-block align-top" alt="">
	    Login Pengunjung
	  </a>
	</nav>
	

	<?php 
		if (isset($_GET['pesan'])) {
			if ($_GET['pesan'] == "gagal") {
				echo "Login gagal! username dan password salah";
			}
			else if($_GET['pesan'] == "logout")
			{
				echo "Anda berhasil logout";
			}
			else if ($_GET['pesan'] == "belum_login") {
				echo "Anda harus login";
			}
		}
	 ?>

	 <br><br>
	 <div class="container p-5 bg-dark mt-8">
	 	<form method="POST" action="cek_login3.php" class="p-3 mb-2 bg-light text-dark text-white container">
		  <div class="form-group">
		    <label for="exampleInputEmail1">Username</label>
		    <input type="text" name="namap" class="form-control" placeholder="username">
		    <small class="form-text text-muted"></small>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" name="no_telp"  class="form-control" placeholder="Nomor Telepon">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</body>
</html>
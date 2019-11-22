<?php 
	session_start();
	if (empty($_SESSION['username'])) {
		header("location:login.php?pesan=belum_login");
	}
 ?>

 <html>
 <head>
 	<title>SESSION</title>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 </head>
 <body>
 	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	 <img src="login.png" width="30" height="30" class="d-inline-block align-top" alt="">
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="tampil.php"> Onderdil Motor <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Onderdil Mobil</a>
	      </li>
	    </ul>
	  </div>
	   <div class="text-right">
	    <a href="logout.php"><button type="submit" class="btn btn-warning">Logout</button></a></div>
     </div>
	</nav>
 </body>
 </html>
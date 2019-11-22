<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php
		include 'connect.php';
		$id = $_GET['id'];
		$sql = mysqli_query($conn,"SELECT * FROM motor WHERE kode_barang = '$id'");
		$data = mysqli_fetch_array($sql);
	?>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link" href="tampil.php">Lihat Data</a>
	      </li>
	    </ul>
	  </div>
	</nav>

	<h4 class="text-center;" style="font-variant: small-caps;">Update Data Onderdil</h4>

	<form class="container" action="conn_update.php" method="POST">
	  <div class="form-group">
	    <label for="formGroupExampleInput2">Kode Barang</label>
	    <input type="text" class="form-control" id="formGroupExampleInput2" name="kode_barang" value="<?=$data['kode_barang']?>"readonly>
	  </div>
	  <div class="form-group">
	    <label for="formGroupExampleInput">Nama Barang</label>
	    <input type="text" class="form-control" id="formGroupExampleInput" name="nama_barang" value="<?=$data['nama_barang']?>">
	  </div>
	  <div class="form-group">
	    <label for="formGroupExampleInput2">Tahun</label>
	    <input type="text" class="form-control" id="formGroupExampleInput2" name="tahun" value="<?=$data['tahun']?>">
	  </div>
	  <div class="form-group">
	    <label for="formGroupExampleInput2">Harga</label>
	    <input type="text" class="form-control" id="formGroupExampleInput2" name="harga" value="<?=$data['harga']?>">
	  </div>
	   
	  <button type="submit" class="btn btn-warning">Submit</button>
	  <button type="reset" class="btn btn-warning">Batal</button>
	</form>
</body>
</html>
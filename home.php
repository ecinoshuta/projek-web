<!DOCTYPE html>
	<html>
	<head>
		<title>Tampil</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
		<h5 style="font-variant: normal; font-family: serif">Selamat Datang Pengunjung<!-- <?php echo $_SESSION['username']; ?> --></h5>
 	 <br>	
 	 <div class="container">
 	 	<h5 style="font-family: serif; font-variant: initial; text-align: center;"> Onderdil Motor</h5></div>
 	 
 	<!--  <div class="text-right">
	    <a href="logout.php"><button type="submit" class="btn btn-warning">Logout</button></a></div> -->
 	
		<nav class="navbar navbar-expand-lg navbar-light bg-light" >
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav" style="background-color: lightskyblue;">
		    <ul class="navbar-nav">
<!-- 		      <li class="nav-item active">
		        <a class="nav-link" href="tampil.php">Lihat Data</a>
		      </li> -->
		    </ul>
		  </div>
		</nav>
		<form action="conbayar.php" method="post">
		<table class="table table-striped table-skylightblue">
			<tr>
				<td> Kode Barang</td>
				<td> Nama Barang </td>
				<td> Tahun Barang </td>
				<td> Harga Barang </td>
				<td style="text-align:center;"> Pilih</td>
			</tr>
			<?php
				include 'connect.php';
				$query=mysqli_query($conn,"SELECT * FROM motor");
				while ($a=mysqli_fetch_array($query)) {
					?>
					<tr>
						<td><?php echo $a['kode_barang']?></td>
						<td><?php echo $a['nama_barang']?></td>
						<td><?php echo $a['tahun']?></td>
						<td><?php echo $a['harga']?></td>
						<td style="text-align:center;">
						  <label class="form-check-label">
							<input type="checkbox" class="form-check-input" name="pilih" value="<?=$a->kode_barang;?>">
						  </label>
						</>
						</td>
						<!-- <td  style="text-align:center;">
							<a href="update.php?id=<?php echo $a['kode_barang'];?>"><button type="button" class="btn btn-primary">Edit</button></a>
						</td> -->
					</tr>
					<?php
				} ?>
 		</table>
		 <center>
		 <button type="submit" class="btn btn-primary" >Bayar</button>
		 </center>
		 
		</form>
		 
 	<!-- <div class="text-center"><a href="tambah.php"><i class="fas fa-plus"></i>Tambah Data</a></div> -->
	</body>
	</html>	
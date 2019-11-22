<?php 
	$id = $_POST['kode_barang'];
	$nama_barang = $_POST['nama_barang'];
	$harga = $_POST['harga'];
	

	include 'connect.php';

	$data = mysqli_query($conn, "INSERT INTO penjualan VALUES ('$kode_barang','$nama_barang','$harga')") or die (mysqli_error($conn));

	$check = mysqli_num_rows($data);
	if ($data >= 1) {
		header('location:bayar.php');
	}
 ?>
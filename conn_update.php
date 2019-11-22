<?php 
	$id = $_POST['kode_barang'];
	$kode_barang = $_POST['kode_barang'];
	$nama_barang = $_POST['nama_barang'];
	$harga = $_POST['harga'];
	$tahun = $_POST['tahun'];

	include 'connect.php';

	$data = mysqli_query($conn, "UPDATE motor SET nama_barang = '$nama_barang', harga = '$harga', tahun ='$tahun' WHERE kode_barang = '$id'") or die (mysqli_error($connect));

	$check = mysqli_num_rows($data);
	if ($data >= 1) {
		header('location:tampil.php');
	}
 ?>
<?php 
	$id = $_POST['kode_barang'];
	$kode_barang = $_POST['kode_barang'];
	$nama_barang = $_POST['nama_barang'];
	$tahun = $_POST['tahun'];
	$harga = $_POST['harga'];
	

	include 'connect.php';

	$data = mysqli_query($conn, "INSERT INTO`motor`(`kode_barang`, `nama_barang`, `tahun`, `harga`) VALUES ('$kode_barang','$nama_barang','$tahun','$harga')") or die (mysqli_error($conn));

	$check = mysqli_num_rows($data);
	if ($data >= 1) {
		header('location:tampil.php');
	}
 ?>
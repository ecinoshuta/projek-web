<?php 
	session_start();

	$query = new mysqli('localhost', 'root', '', 'onderdil');

	$namap = $_POST['namap'];
	$no_telp = $_POST['no_telp'];
	$alamat = $_POST['alamat'];

	$data = mysqli_query($query, "SELECT * FROM pembeli WHERE namap = '$namap' AND no_telp = '$no_telp'") or die (mysql_error($query));

	$cek = mysqli_num_rows($data);

	if ($cek > 0) {
		$_SESSION['namap'] = $namap;
		$_SESSION['no_telp'] = $no_telp;
		header("location:input_pembeli.php");
	}
	else
	{
		header("location:masuk.php?pesan=gagal");
	}
 ?>
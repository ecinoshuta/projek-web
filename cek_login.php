<?php 
	session_start();

	$query = new mysqli('localhost', 'root', '', 'onderdil');

	$username = $_POST['username'];
	$password = $_POST['password'];

	$data = mysqli_query($query, "SELECT * FROM admin WHERE username = '$username' AND password = '$password'") or die (mysql_error($query));

	$cek = mysqli_num_rows($data);

	if ($cek > 0) {
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		header("location:session.php");
	}
	else
	{
		header("location:login.php?pesan=gagal");
	}
 ?>
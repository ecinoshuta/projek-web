<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Konfirmasi Bayar</title>
</head>
<body>
	<legend>Konfirmasi Bayar</legend>
	<!-- <?php
            include 'connect.php';
            $id=$_POST['kode_barang'];
            $query=mysqli_query($conn,"SELECT * FROM  penjualan where kode_barang='$id'");
            $total = $_POST['harga'];
            $data=mysqli_fetch_array($query);
        ?> -->
        <?php
        while ($a=mysqli_fect_array($data))
        {?>
         Total bayar : Rp.<?php echo $e['total_pembayaran']   
        }
        ?>
</body>
</html>
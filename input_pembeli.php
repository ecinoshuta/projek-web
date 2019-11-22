<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "onderdil";
    $con = mysqli_connect($host,$user,$pass,$database);

    $namap = $_POST['namap'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO pembeli values 
    ('$namap','$no_telp','$alamat')";
    $data = mysqli_query($con,$sql);
    if ($data){
        echo "<h3> <center>   Proses Berhasil, lanjutkan! </center></h3> <br>
        <a href= 'home.php'>Lanjut diSini</a> "; 
    }
        else{
            echo "Proses Gagal <br>";
            echo "<a href= 'pembeli.php'>Kembali Ke Menu</a>";
        }
?>
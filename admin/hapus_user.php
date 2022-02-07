<?php

    if((!isset($_COOKIE['user']) && !isset($_COOKIE['pass'])))
    {
        echo"<script>alert('Anda Belum Login,silakan login terlebih dahulu'); document.location='../index.php';</script>";
    }

?>
<?php 

require "../Fungsi.php";
$object=new fungsi();
$username=$_GET['username'];
$object->koneksi();
$hasil=$object->hapusUser($username);

if($hasil){
	echo "<script>alert('Data Berhasil Dihapus'); document.location='user.php';</script>";
}

 ?>
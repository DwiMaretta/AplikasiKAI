<?php

    if((!isset($_COOKIE['user']) && !isset($_COOKIE['pass'])))
    {
        echo"<script>alert('Anda Belum Login,silakan login terlebih dahulu'); document.location='../index.php';</script>";
    }

?>
<?php 

require "../Fungsi.php";
$object=new fungsi();
$koneksi=$object->koneksi();

$kode=$_GET['kode'];
$hsl=$object->hapusjaringancic($kode);
if($hsl>0){
	echo"<script>alert('Data Berhasil Dihapus'); document.location='cic.php';</script>";
}

 ?>
<?php

    if((!isset($_COOKIE['user']) && !isset($_COOKIE['pass'])))
    {
        echo"<script>alert('Anda Belum Login,silakan login terlebih dahulu'); document.location='../index.php';</script>";
    }

?>
<?php 

require "../Fungsi.php";
$object = new fungsi();
$koneksi=$object->koneksi();

$data=$object->simpandatacctv(); 


?>


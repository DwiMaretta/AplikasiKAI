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

 ?>

 								<?php  
 
								$checkbox1=$_POST['sip'];
								$kodenya=$_POST['kod']; 
								$checkbox="baik";

								$in_ch=mysqli_query($koneksi,"INSERT into stasiun_cctv_kondisi values ('$kodenya,$checkbox')");  
								if($in_ch==1)  
								   {  
								      echo'<script>alert("Inserted Successfully")</script>';  
								   }  
								else  
								   {  
								      echo'<script>alert("Failed To Insert")</script>';  
								    }   
								?>
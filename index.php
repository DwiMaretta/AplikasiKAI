<?php 
require "Fungsi.php";
$objek=new Fungsi();
$koneksi=$objek->koneksi();
 ?>

<!DOCTYPE html>
<html>
<?php include "head.php" ?>
<head>
  <title>PT KAI DIVRE III PALEMBANG</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div id="login-box">
  <div class="left-box">



<br>
<br>
<br>
<br>



  <!-- Content START -->
  <div id="slideshow-mudah" class="carousel slide" data-ride="carousel">
 
  <!-- Wrapper for slides, Ini adalah Tempat Gambar-->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/gA_01.png" alt="slideshow-mudah"> <!—Gambar -->
      <div class="carousel-caption"> <!—Penjelasan -->
        <h3></h3>
        <p></p>
      </div>
    </div>

    <div class="item">
      <img src="images/gA_02.gif" alt="slideshow-mudah"> <!—Gambar -->
      <div class="carousel-caption">  <!—Penjelasan -->
        <h3></h3>
        <p></p>
      </div>
    </div>
    <div class="item">
      <img src="images/gA_03.gif" alt="slideshow-mudah"> <!—Gambar -->
      <div class="carousel-caption"> <!—Penjelasan -->
        <h3></h3>
        <p></p>
      </div>
    </div>
    <div class="item">
      <img src="images/gA_04.gif" alt="slideshow-mudah"> <!—Gambar -->
      <div class="carousel-caption"> <!—Penjelasan -->
        <h3></h3>
        <p></p>
      </div>
    </div>
     
    
  </div>
 
  <!-- Controls, Ini adalah Panah Kanan dan Kiri. item ini dapat dihapus jika tidak diperlukan-->
  
</div>
  <!-- Content END -->


     
    
  </div>

  <div class="right-box">
    <br>
    <br>
    <br>
    <br>
    <h1>  </h1>
    <form method="post">
    <input type="text" name="username" placeholder="Username"/>
    
    <input type="password" name="pwd" placeholder="Password"/>
    <br>
    <input type="submit" name="simpan" value="Login">
  </form>

  
     <marquee direction="left">Anda adalah prioritas kami</font></p></marquee>
  </div>
</div>


<script src="http://monozcore-project.googlecode.com/files/Kupu-kupu123.js" type="text/javascript"></script>


<?php 
//jika ada tombol Sig In (tombol simpan ditekan)
if (isset ($_POST["simpan"]))
{
  $username = $_POST["username"];
  $password =$_POST["pwd"];
  //lakukan query ngecek akun di tabel user di db
  $ambil =mysqli_query($koneksi,"SELECT * FROM user WHERE username ='$username' AND password='$password'");

  //jika 1 akun yang cocok, maka diloginkan
  if (mysqli_num_rows($ambil)==1){
    $acc=$ambil->fetch_assoc();
    $userrole = $acc['role_id'];
    $nama=$acc['nama'];
    switch($userrole){
            case 1: header("location:admin/index.php");
                break;
            case 2: header("location:manager/index.php");
                break;
            case 3: header("location:pegawai/index.php");
                break;
            default: 
            break;
            }
    echo "<script>alert('anda sukses login');</script>";
    //setcookie($username, $password, time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie('user', $username, time() + (60 * 60 * 24 * 5), '/');
    setcookie('pass', $password, time() + (60 * 60 * 24 * 5), '/');
    setcookie('nama', $nama, time() + (60 * 60 * 24 * 5), '/');
    
  }
  else
  {
    //anda gagal login
    echo "<script>alert('anda gagal login, periksa akun anda');</script>";
    echo "<script>location='index.php';</script>";
  }
}
 ?>

  <?php include "script.php" ?> 
</body>

<div role='main' class='main'>
        <div class='container'>
          <div class='row center'>
            <img src='https://res.cloudinary.com/itangnet/image/upload/v1520415762/siloko_irrwnh.png' alt='PT Kereta Api Indonesia (Persero)' width="58">
            <br>
          </div>
          <div class='row'>
             <img height="50" src="kereta.png" class="gwd-img-1aal gwd-gen-1n0egwdanimation gwd-img-9146">

        <style type="text/css">

        
      .gwd-img-1aal {
        position: absolute;
        height: 40px;
        width: auto;
        right: 50px;
        top: 424px;
        transform-style: preserve-3d;
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        transform: translate3d(0px, 0px, 0px);
        -webkit-transform: translate3d(0px, 0px, 0px);
        -moz-transform: translate3d(0px, 0px, 0px);
      }
     

      @-webkit-keyframes gwd-gen-1n0egwdanimation_gwd-keyframes {
        0% {
          -webkit-transform: translate3d(224px, 151px, 0px);
          -webkit-animation-timing-function: linear;
        }
        100% {
          -webkit-transform: translate3d(-3707px, 151px, 0px);
          -webkit-animation-timing-function: linear;
        }
      }
      
      
      @-moz-keyframes gwd-gen-1n0egwdanimation_gwd-keyframes {
        0% {
          -moz-transform: translate3d(24px, 151px, 0px);
          -moz-animation-timing-function: linear;
        }
        100% {
          -moz-transform: translate3d(-3707px, 151px, 0px);
          -moz-animation-timing-function: linear;
        }
      }
      
      
      .gwd-gen-1n0egwdanimation {
        animation: gwd-gen-1n0egwdanimation_gwd-keyframes 24.5s linear 0s infinite normal forwards;
        -webkit-animation: gwd-gen-1n0egwdanimation_gwd-keyframes 24.5s linear 0s infinite normal forwards;
        -moz-animation: gwd-gen-1n0egwdanimation_gwd-keyframes 24.5s linear 0s infinite normal forwards;
      }

        </style>

    <div class='body coming-soon'>
      <header id='header' data-plugin-options='{'stickyEnabled': false}'>
        </div>
      </header>
            <div class='col-md-12'>
              <hr class='tall'>

            </div>
          </div>
          </div>
        </div>
      </div>
    </div>

</html>
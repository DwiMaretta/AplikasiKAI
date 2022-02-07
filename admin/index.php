<?php 
require "../Fungsi.php";
$object = new fungsi();
$koneksi=$object->koneksi("localhost","root","","kai");
$cctvstasiun=$object->jumlahCctvStasiun();
$cctvkereta=$object->jumlahCctvKereta();
$cctvkantor=$object->jumlahCctvKantor();
$jaringanloket=$object->jumlahLoketBerjaringan();
$jaringancs=$object->jumlahCsBerjaringan();
$jaringanboarding=$object->jumlahBoardingBerjaringan();
$jaringantd=$object->jumlahTdBerjaringan();
$jaringancic=$object->jumlahCicBerjaringan();
$jumlahpegawai=$object->jumlahPegawai();
$jumlahuser=$object->jumlahUser();
?>
<?php

    if((!isset($_COOKIE['user']) && !isset($_COOKIE['pass'])))
    {
        echo"<script>alert('Anda Belum Login,silakan login terlebih dahulu'); document.location='../index.php';</script>";
    }

?>
<!doctype html>
<html class="fixed">
<?php include "head.php";  ?>
	<body>
		<section class="body">

			<!-- start: header -->
			<?php include "header.php" ?>
			<!-- end: header -->

			<div class="inner-wrapper">

				<!-- start: sidebar -->
				<?php include "sidebar.php" ?>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
				<header class="page-header">

						<h2>Dashboard</h2>
						<h2></h2>
						<!-- <h2><marquee direction="right" style="color:blue" >SISTEM INFORMASI PENGEEKAN</marquee></h2> -->
						<div class="right-wrapper pull-right" >

							<ol class="breadcrumbs">
								<li>
									<a href="index.php">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<!--<marquee direction="right">Teks ini ke kanan</marquee>-->
								<li><span>Dashboard</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>


						


   
  <!-- Content START -->
  <div id="slideshow-mudah" class="carousel slide" data-ride="carousel">
  <!-- Indicators, Ini adalah Tombol BULET BULET dibawah. item ini dapat dihapus jika tidak diperlukan -->
  <ol class="carousel-indicators">
    <li data-target="#slideshow-mudah" data-slide-to="0" class="active"></li>
    <li data-target="#slideshow-mudah" data-slide-to="1"></li>
    <li data-target="#slideshow-mudah" data-slide-to="2"></li>
  </ol>
 
  <!-- Wrapper for slides, Ini adalah Tempat Gambar-->
  <div class="carousel-inner">
    <div class="item active">
      <img src="../assets/images/1kai.jpg" alt="slideshow-mudah"> <!—Gambar -->
      <div class="carousel-caption"> <!—Penjelasan -->
        <h3></h3>
        <p></p>
      </div>
    </div>
 <!--  <div class="item">
      <img src="../assets/images/1.jpg" alt="slideshow-mudah"> 
      <div class="carousel-caption">  
        <h3></h3>
        <p></p>
      </div>
    </div> -->
    <div class="item">
      <img src="../assets/images/2b.jpg" alt="slideshow-mudah"> <!—Gambar -->
      <div class="carousel-caption">  <!—Penjelasan -->
        <h3></h3>
        <p></p>
      </div>
    </div>
    <div class="item">
      <img src="../assets/images/sejarah.jpg" alt="slideshow-mudah"> <!—Gambar -->
      <div class="carousel-caption"> <!—Penjelasan -->
        <h3></h3>
        <p></p>
      </div>
    </div>
     
    
  </div>
 
  <!-- Controls, Ini adalah Panah Kanan dan Kiri. item ini dapat dihapus jika tidak diperlukan-->
  <a class="left carousel-control" href="#slideshow-mudah" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#slideshow-mudah" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
  <!-- Content END -->

  					<br></br>
					<!-- start: page -->
					<div class="row">

						<div class="col-md-6 col-lg-12 col-xl-6">
							<div class="row">
								<div class="col-md-12 col-lg-6 col-xl-6">
									<section class="panel panel-featured-left panel-featured-primary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-primary">
														<i class="fa fa-video-camera"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Jumah CCTV Stasiun</h4>
														<div class="info">
															<strong class="amount"><?php echo $cctvstasiun; ?></strong>
								
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
								<div class="col-md-12 col-lg-6 col-xl-6">
									<section class="panel panel-featured-left panel-featured-secondary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-warning">

														<i class="fa fa-video-camera"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Total CCTV Kereta</h4>

													
														<div class="info">
															<strong class="amount"><?php echo $cctvkereta; ?></strong>
														</div>
													</div>
													<div class="summary-footer">
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
								<div class="col-md-12 col-lg-6 col-xl-6">
									<section class="panel panel-featured-left panel-featured-primary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-success">
														<i class="fa fa-video-camera"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Jumah CCTV Kantor</h4>
														<div class="info">
															<strong class="amount"><?php echo $cctvkantor; ?></strong>
								
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
								<div class="col-md-12 col-lg-6 col-xl-6">
									<section class="panel panel-featured-left panel-featured-tertiary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-secondary">
														<i class="fa fa-ticket"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Total Loket</h4>
														<div class="info">
															<strong class="amount"><?php echo $jaringanloket; ?></strong>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>

								<div class="col-md-12 col-lg-6 col-xl-6">
									<section class="panel panel-featured-left panel-featured-tertiary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-tertiary">
														<i class="	fa fa-phone"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Total Customer Service</h4>
														<div class="info">
															<strong class="amount"><?php echo $jaringancs; ?></strong>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>

								<div class="col-md-12 col-lg-6 col-xl-6">
									<section class="panel panel-featured-left panel-featured-tertiary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-success">
														<i class="fa fa-laptop"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Total Boarding</h4>
														<div class="info">
															<strong class="amount"><?php echo $jaringanboarding; ?></strong>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>


																<div class="col-md-12 col-lg-6 col-xl-6">
									<section class="panel panel-featured-left panel-featured-primary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-success">
														<i class="fa fa-ticket"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Jumah CIC</h4>
														<div class="info">
															<strong class="amount"><?php echo $jaringancic; ?></strong>
								
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
								<div class="col-md-12 col-lg-6 col-xl-6">
									<section class="panel panel-featured-left panel-featured-tertiary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-secondary">
														<i class="fa fa-wheelchair"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Total Tempat Duduk Berjaringan</h4>
														<div class="info">
															<strong class="amount"><?php echo $jaringantd; ?></strong>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>

								<div class="col-md-12 col-lg-6 col-xl-6">
									<section class="panel panel-featured-left panel-featured-quartenary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-quartenary">
														<i class="	fa fa-users"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Total User</h4>
														<div class="info">
															<strong class="amount"><?php echo $jumlahuser; ?></strong>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>

								
								<div class="col-md-12 col-lg-6 col-xl-6">
									<section class="panel panel-featured-left panel-featured-quartenary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-primary">
														<i class="	fa fa-user"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Total Pegawai</h4>
														<div class="info">
															<strong class="amount"><?php echo $jumlahpegawai; ?></strong>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>



							</div>
						</div>
					</div>

					

					

			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close visible-xs">
							Collapse <i class="fa fa-chevron-right"></i>
						</a>
			
						<div class="sidebar-right-wrapper">
			
							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker data-plugin-skin="dark" ></div>
			
								<ul>
									<li>
										<time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
										<span>Company Meeting</span>
									</li>
								</ul>
							</div>
			
							<div class="sidebar-widget widget-friends">
							
			
						</div>
					</div>
				</div>
			</aside>
		</section>

		<!-- Vendor -->
	<?php include "script.php" ?>

	</body>
</html>
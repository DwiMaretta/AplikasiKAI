<?php

    if((!isset($_COOKIE['user']) && !isset($_COOKIE['pass'])))
    {
        echo"<script>alert('Anda Belum Login,silakan login terlebih dahulu'); document.location='../index.php';</script>";
    }

?>
<?php 
require "../fungsi.php";
$object = new fungsi();
$koneksi=$object->koneksi();
$kode = $_GET['kode'];
$dataa=$object->edit_jaringan_loket($kode); 

    foreach ($dataa as $data) {

    $nama_loket=$data['nama_loket'];
    $nama_stasiun=$data['nama_stasiun'];
}
include "head.php" ?>

	<body>
		<section class="body">

			<!-- start: header -->
			<?php include "header.php" ?>
			<!-- end: header -->

			<div class="inner-wrapper">

				<!-- start: sidebar -->
				<?php include "sidebar.php" ?>
				<!-- end: sidebar -->

			<!--	<section role="main" class="content-body">
					<?php //include "headerbawah.php" ?> -->

				<section role="main" class="content-body" >
					<header class="page-header">
						<h2>Form Ubah Asset</h2>
					</header>


					<!-- start: page -->
					<div class="row-md-6" >
						<div class="col-md-12">
							<form id="form" class="form-horizontal" method="POST">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											
										</div>

										<h2 class="panel-title">Form Ubah Asset Loket Jaringan</h2>
										<p class="panel-subtitle">
											Pengubahan Asset yang di perlukan di PT KAI DRIVE III
										</p>
									</header>
									<div class="panel-body">
										<div class="form-group">
											<label class="col-sm-3 control-label">Kode   : <span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="text" class="form-control" required name="kode" value="<?php echo $kode; ?>"/>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Nama Stasiun :  <span class="required">*</span></label>
											<div class="col-sm-9">
												<select name="nama_stasiun" id="">
													<?php 
													$query = "SELECT * FROM nama_stasiun ORDER BY stasiun ASC";

								 					$result = mysqli_query($koneksi, $query);
												

												    while($datasta = mysqli_fetch_assoc($result)){
												   	if ($nama_stasiun==$datasta['stasiun']) {
         											$select="selected";
        											}else{
         											$select="";
        											}
       												 echo "<option $select>".$datasta['stasiun']."</option>";
       											}
													?>
												</select>
											</div>
										</div>	
										
										<div class="form-group">
											<label class="col-sm-3 control-label">Nama Loket Jaringan :  <span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="text" class="form-control" required name="nama" value="<?php echo $nama_loket; ?>"/>
											</div>
										</div>	
									</div>
									<footer class="panel-footer">
										<div class="row">
											<div class="col-sm-9 col-sm-offset-10">
												<button class="btn btn-primary" name="submit">Submit</button>
											</div>
										</div>
									</footer>
								</section>
							</form>

						</div>

						<!-- Memasukkan Asset ke Database -->
						<?php 
							if(isset($_POST["submit"]))
							{
								$kode = $_POST["kode"];
								$nama_loket = $_POST["nama"];
								$nama_stasiun = $_POST["nama_stasiun"];
								$hasil=$object->simpanubahjaringanloket($kode,$nama_loket,$nama_stasiun);



	 					if($hasil)
	    				echo"<script>alert('Data Berhasil Disimpan'); document.location='loket.php';</script>";

							}
						?>

<?php include "script.php" ?>	
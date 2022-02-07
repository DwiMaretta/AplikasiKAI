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
$dataa=$object->editlocotrack($kode); 

    foreach ($dataa as $data) {
    $jenis=$data['jenis_locotrack'];

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

										<h2 class="panel-title">Form Ubah LocotrackT</h2>
										<p class="panel-subtitle">
											Pengubahan Asset yang di perlukan di PT KAI DRIVE III
										</p>
									</header>
									<div class="panel-body">


										<div class="form-group">
											<label class="col-sm-3 control-label">Jenis Locotrack :  <span class="required">*</span></label>
											<div class="col-sm-9">
												<select name="jenis_locotrack" id="">
													<?php 
													$query = "SELECT * FROM jenis_locotrack ORDER BY nama ASC";

								 					$result = mysqli_query($koneksi, $query);
												

												    while($datasta = mysqli_fetch_assoc($result)){
												   	if ($jenis==$datasta['nama']) {
         											$select="selected";
        											}else{
         											$select="";
        											}
       												 echo "<option $select>".$datasta['nama']."</option>";
       											}
													?>
												</select>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Kode   : <span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="text" class="form-control" required name="kode" value="<?php echo $kode; ?>"/>
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
								$jenis_locotrack = $_POST["jenis_locotrack"];

								$hasil=$object->simpanubahlocotrack($kode,$jenis_locotrack);



	 					if($hasil)
	    				echo"<script>alert('Data Berhasil Disimpan'); document.location='locotrack.php';</script>";

							}
						?>

<?php include "script.php" ?>	
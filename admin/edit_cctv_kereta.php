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
$dataa=$object->edit_cctv_kereta($kode); 

    foreach ($dataa as $data) {
    $nama_kereta=$data['nama_kereta'];
    $lokasi=$data['lokasi'];
    $tanggal=$data['tanggal'];
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

										<h2 class="panel-title">Form Ubah Asset CCTV Kereta</h2>
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
											<label class="col-sm-3 control-label">Lokasi :  <span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="text" class="form-control" required name="lokasi" value="<?php echo $lokasi; ?>"/>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Nama Kereta :  <span class="required">*</span></label>
											<div class="col-sm-9">
												<select name="nama_kereta" id="">
													<?php 
													$query = "SELECT * FROM nama_kereta ORDER BY kereta ASC";

								 					$result = mysqli_query($koneksi, $query);
												

												    while($datasta = mysqli_fetch_assoc($result)){
												   	if ($nama_kereta==$datasta['kereta']) {
         											$select="selected";
        											}else{
         											$select="";
        											}
       												 echo "<option $select>".$datasta['kereta']."</option>";
       											}
													?>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Tanggal :  <span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="date" class="form-control" required name="tanggal" value="<?php echo $tanggal; ?>"/>
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
								$lokasi = $_POST["lokasi"];
								$nama_kereta = $_POST['nama_kereta'];
								$tanggal=$_POST['tanggal'];
								$hasil=$object->simpanubahcctvkereta($kode,$lokasi,$nama_kereta,$tanggal);



	 					if($hasil)
	    				echo"<script>alert('Data Berhasil Disimpan'); document.location='cctv_kereta.php';</script>";

							}
						?>

<?php include "script.php" ?>	
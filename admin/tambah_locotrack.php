<?php

    if((!isset($_COOKIE['user']) && !isset($_COOKIE['pass'])))
    {
        echo"<script>alert('Anda Belum Login,silakan login terlebih dahulu'); document.location='../index.php';</script>";
    }

?>
<?php 
require "../Fungsi.php";
include "alert.css";
$object = new fungsi();
$koneksi=$object->koneksi();
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
						<h2>Form Tambah Asset</h2>
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

										<h2 class="panel-title">Form Penginputan Data Locotrack</h2>
										<p class="panel-subtitle">
											Penambahan Asset yang di perukan di PT KAI DRIVE III
										</p>
									</header>
									<div class="panel-body">
										<div class="form-group">
											<label class="col-sm-3 control-label">Locotrack :  <span class="required">*</span></label>
											<div class="col-sm-9">
												<select name="nama">
												  	<?php 
													$query = "SELECT * FROM jenis_locotrack ORDER BY nama ASC";

								 					$result = mysqli_query($koneksi, $query);

												   while($data = mysqli_fetch_assoc($result) ){?>

												    <option value="<?php echo $data['nama']; ?>"><?php echo $data['nama']; ?></option>

												   <?php } ?>

												  </select>
											</div>
											<div class="col-sm-9">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Kode   : <span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="text" class="form-control" placeholder="kode cctv" required name="kode"/>
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
								$locotrack = $_POST["nama"];
								$a=$object->simpandatalocotrack($kode,$locotrack);


	       						if($a){
	       						echo '<div id="tampil_modal">
											    <div id="modal_blue">
											      <div id="modal_atas_blue">Informasi</div>
											      <p>Data Berhasil di Tambah!.</p>
											      <a href="tambah_locotrack.php"><button id="oke_blue">Oke</button></a>
											    </div></div>';
											
	       						}else{
	       						echo '<div id="tampil_modal">
											    <div id="modal">
											      <div id="modal_atas">Informasi</div>
											      <p>Data Gagal ditambahkan,Periksa Kembali data!.</p>
											      <a href="tambah_locotrack.php"><button id="oke">Oke</button></a>
											    </div></div>';	
	       						}



							}
						?>
				</section>
			</div>
		</section>
</body>
<?php include "script.php" ?>	
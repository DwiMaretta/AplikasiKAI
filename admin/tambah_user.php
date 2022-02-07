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

										<h2 class="panel-title">Form Tambah User</h2>
										<p class="panel-subtitle">
											Penambahan User pada PT KAI DRIVE III
										</p>
									</header>
									<div class="panel-body">
										<div class="form-group">
											<label class="col-sm-3 control-label">Bagian   : <span class="required">*</span></label>
											<div class="col-sm-9">
												<select name="bagian">
												  	<?php 
													$query = "SELECT * FROM bagian_user ORDER BY tempat ASC";

								 					$result = mysqli_query($koneksi, $query);

												   while($data = mysqli_fetch_assoc($result) ){?>

												    <option value="<?php echo $data['tempat']; ?>"><?php echo $data['tempat']; ?></option>

												   <?php } ?>

												  </select>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Username   : <span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="text" class="form-control" placeholder="Username" required name="username"/>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Password :  <span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="text" class="form-control" placeholder="Password " required name="password"/>
											</div>
											<div class="col-sm-9">
											</div>
										</div>	
										<div class="form-group">
											<label class="col-sm-3 control-label">Nama :  <span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="text" class="form-control" placeholder="Nama User" required name="nama"/>
											</div>
											<div class="col-sm-9">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Role_ID :  <span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="text" class="form-control" placeholder="1=admin/2=manager/3=pegawai" required name="role"/>
											</div>
											<div class="col-sm-9">
											</div>
										</div>

									</div>
																<footer class="panel-footer">
										<div class="row">
											<div class="col-sm-9 col-sm-offset-10">
												<button class="btn btn-primary" name="submit">Simpan</button>
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
								$bagian = $_POST["bagian"];
								$username = $_POST["username"];
								$password = $_POST["password"];
								$nama = $_POST["nama"];
								$role_id = $_POST["role"];
								$a=$object->tambahUser($bagian,$username,$password,$nama,$role_id);

	       					if($a){
	       						echo '<div id="tampil_modal">
											    <div id="modal_blue">
											      <div id="modal_atas_blue">Informasi</div>
											      <p>Data Berhasil di Tambah!.</p>
											      <a href="user.php"><button id="oke_blue">Oke</button></a>
											    </div></div>';
											
	       						}else{
	       						echo '<div id="tampil_modal">
											    <div id="modal">
											      <div id="modal_atas">Informasi</div>
											      <p>Data Gagal ditambahkan,Periksa Kembali data!.</p>
											      <a href="tambah_user.php"><button id="oke">Oke</button></a>
											    </div></div>';	
	       						}

							}
						?>
				</section>
			</div>
		</section>
</body>
<?php include "script.php" ?>	
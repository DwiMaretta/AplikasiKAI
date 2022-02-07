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
<?php include "head.php" ?>
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
						<h2>USER</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.php">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>USER</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									
								</div>
						
								<h2 class="panel-title">USER </h2>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-6">
										<div class="mb-md">
											<a href="tambah_user.php" color="white"><button id="addToTable" class="btn btn-primary">Tambah User <i class="fa fa-plus"></i></button></a>
										</div>
										<form method="post">
										<div class="col-sm-12">
											  <label for=""><h4><b>Tampilakan User Bagian : </b></h4></label>

												  <select name="nama">
												  	<?php 
													$query = "SELECT * FROM bagian_user ORDER BY tempat ASC";

								 					$result = mysqli_query($koneksi, $query);

												   while($data = mysqli_fetch_assoc($result) ){?>

												    <option value="<?php echo $data['tempat']; ?>"><?php echo $data['tempat']; ?></option>

												   <?php } ?>

												  </select>
												  <input type="submit" name="kirim_tempat" class="btn btn-warning" value="Pilih">
										</div>
										</form>

										<?php
								
											    if(isset($_POST["kirim_tempat"])){
											    $bagian=$_POST['nama'];
											    
												$tempat=$object->tampilkanuserbagian($bagian);
												}

												else{
												$tempat=$object->tampilkanusersemua();
												}
									
										?>
									</div>
								</div>

								    <form enctype="multipart/form-data"><br><br>
   								<div> 
								<table class="table table-bordered table-striped mb-none" id="datatable-editable">
									<thead>
										<tr>
											<th>Bagian</th>
											<th>Username</th>
											<th>Password</th>
											<th>Nama</th>
											<th>Role_ID</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>

											<?php 
										    foreach ($tempat as $d){
										    ?>
										    <tr>
										    <td><?php echo $d['bagian']; ?></td>
										    <td><?php echo $d['username']; ?></td>
										    <td><?php echo $d['password']; ?></td>
										    <td><?php echo $d['nama']; ?></td>
										    <td><?php echo $d['role_id']; ?></td>

										    <td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
												<a href="edit_user.php?username=<?php echo $d['username']; ?>" class="on-default edit-row"><i class="fa fa-pencil"></i></a> ||
												<a href="hapus_user.php?username=<?php echo $d['username']; ?>" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
											</td>

										    </tr>

										    <?php }; ?>

									</tbody>
								</table>
								</div><br>

							</form>

							</div>
						</section>
						
			</div>


			</section>
			</div>
			</section>
			<?php include "script.php" ?>	
			</body>
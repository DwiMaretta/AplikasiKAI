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
$username = $_GET['username'];
$dataa=$object->editUser($username); 

    foreach ($dataa as $data) {

    $username=$data['username'];
    $password=$data['password'];
    $nama=$data['nama'];
    $role_id=$data['role_id'];
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
						<h2>Form Ubah User</h2>
					</header>


					<!-- start: page -->
					<div class="row-md-6" >
						<div class="col-md-12">
							<form id="form" class="form-horizontal" method="POST">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>

										<h2 class="panel-title">Form Ubah User</h2>
										<p class="panel-subtitle">
											Pengubahan Data User pada PT KAI DRIVE III
										</p>
									</header>
									<div class="panel-body">
										<div class="form-group">
											<label class="col-sm-3 control-label">Bagian :  <span class="required">*</span></label>
											<div class="col-sm-9">
													<select name="bagian" id="">
													<?php 
													$query = "SELECT * FROM bagian_user ORDER BY tempat ASC";

								 					$result = mysqli_query($koneksi, $query);
												

												    while($datasta = mysqli_fetch_assoc($result)){
												   	if ($nama_stasiun==$datasta['tempat']) {
         											$select="selected";
        											}else{
         											$select="";
        											}
       												 echo "<option $select>".$datasta['tempat']."</option>";
       											}
													?>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Username   : <span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="text" class="form-control" required name="username" value="<?php echo $username; ?>"/>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Password :  <span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="text" class="form-control" required name="password" value="<?php echo $password; ?>"/>
											</div>
										</div>	
										<div class="form-group">
											<label class="col-sm-3 control-label">Nama :  <span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="text" class="form-control" required name="nama" value="<?php echo $nama; ?>"/>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Role_ID :  <span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="text" class="form-control" required name="role_id" value="<?php echo $role_id; ?>"/>
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

						<?php 
							if(isset($_POST["submit"]))
							{
								$bagian = $_POST["bagian"];
								$username = $_POST["username"];
								$password = $_POST["password"];
								$nama = $_POST["nama"];
								$role_id=$_POST['role_id'];
								$hasil=$object->simpanUbahUser($bagian,$username,$password,$nama,$role_id);



	 					if($hasil)
	    				echo"<script>alert('Data Berhasil DiUbah'); document.location='user.php';</script>";

							}
						?>

<?php include "script.php" ?>	
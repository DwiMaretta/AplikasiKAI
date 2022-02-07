<?php

    if((!isset($_COOKIE['user']) && !isset($_COOKIE['pass'])))
    {
        echo"<script>alert('Anda Belum Login,silakan login terlebih dahulu'); document.location='../index.php';</script>";
    }

?>

<?php

require "../fungsi.php";
include "alert.css";
$object = new fungsi();
$koneksi=$object->koneksi();


?>

<script type="text/javascript"> 
//check all checkbox
function checkAll(form){
	for (var i=0;i<document.forms[form].elements.length;i++)
	{
		var e=document.forms[form].elements[i];
		if ((e.name !='allboxbaik') && (e.type=='checkbox') && (e.value=='baik'))
		{
			e.checked=document.forms[form].allboxbaik.checked;
		}
		else if ((e.name !='allboxrusak') && (e.type=='checkbox') && (e.value=='rusak'))
		{
			e.checked=document.forms[form].allboxrusak.checked;
		}
	}
}
</script>
<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>PT KAI DIVRE III</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="../assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="../assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="../assets/vendor/select2/select2.css" />
		<link rel="stylesheet" href="../assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="../assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="../assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="../assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="../assets/vendor/modernizr/modernizr.js"></script>

	</head>
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
						<h2>CCTV Kereta</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>CCTV</span></li>
								<li><span>Kereta</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

								<div class="row">
									<div class="col-sm-6">
										<form method="post">
										<div class="col-sm-12">
											<label for=""><h4><b>Nama Kereta : </b></h4></label>

												  <select name="nama_ker">
												  	<?php 
													$query = "SELECT * FROM nama_kereta ORDER BY kereta ASC";

								 					$result = mysqli_query($koneksi, $query);

												   while($data = mysqli_fetch_assoc($result) ){?>

												    <option value="<?php echo $data['kereta']; ?>"><?php echo $data['kereta']; ?></option>

												   <?php } ?>

												  </select>
										</div><br><br>
										<div class="col-sm-12">
											<label><h4><b>Tanggal : </b></h4> <span class="required"></span></label>
											
												<input type="date" name="tanggal" required>
												&nbsp &nbsp &nbsp &nbsp<input type="submit" name="kirim_kereta" class="btn btn-warning" value="Pilih">
												
										</div>
									</form>
									<?php
									if(isset($_POST["kirim_kereta"])){
										    $nama_kereta=$_POST['nama_ker'];
										    $tanggal=$_POST['tanggal'];


											$kereta=$object->tampilkancctvkereta($nama_kereta);

											if(mysqli_num_rows($kereta)==0){
												echo '<div id="tampil_modal">
											    <div id="modal">
											      <div id="modal_atas">Informasi</div>
											      <p>Harap perbarui data kereta dan tanggal terlebih dahulu !.</p>
											      <a href="cctv_kereta.php"><button id="oke">Oke</button></a>
											    </div></div>';
											}
										}
									else{
									$kereta=$object->tampilkancctvkeretasemua(); 
									}
								
									?>
									<br>
									</div>
								</div>

					<!-- start: page -->
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									
								</div>
						
								<h2 class="panel-title">CCTV Kereta</h2>
							</header>
							<div class="panel-body">
								<form method="post" action="">
									<div>
								<table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
										<tr>
											<th>Kode Kereta</th>
											<th>Nama Kereta</th>
											<th>Kelas</th>
											<th>Tanggal</th>
											<th><center>Kondisi</center></th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										    $i = 0;
										    WHILE ($row_k = mysqli_fetch_array($kereta)) :
										    ?>
										    <tr>
										    <td>
										    	
										    	<input type="hidden" name="code[]" value="<?php echo $row_k['kode']; ?>"><?php echo $row_k['kode']; ?>
										    </td>
										    <td><input type="hidden" name="nama_kereta" value="<?php echo $row_k['nama_kereta']; ?>"><?php echo $row_k['nama_kereta']; ?></td>
										    <td><input type="hidden" name="lokasi[]" value="<?php echo $row_k['lokasi']; ?>"><?php echo $row_k['lokasi']; ?>
										    </td>
										    <td><input type="hidden" name="tanggal[]" value="<?php echo $row_k['tanggal']; ?>"><?php echo $row_k['tanggal']; ?>
										    </td>
										    <td>
										    	<input type="checkbox" name="cek[]" value="baik"> Baik &nbsp || &nbsp

										    	<input type="checkbox" name="cek[]" value="rusak"> Rusak
										    </td>

										    <td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
												<a href="edit_cctv_kereta.php?kode=<?php echo $row_k['kode']; ?>" class="on-default edit-row"><i class="fa fa-pencil"></i> Ubah</a>
												</td>

										    </tr>

										   <?php
											    $i++;
											endwhile;
											?>
									</tbody>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td><input type="checkbox" name="allboxbaik" value="check" onclick="checkAll(1);" /> Baik semua ||
									<input type="checkbox" name="allboxrusak" value="check" onclick="checkAll(1);" /> Rusak semua</td>
								</table>
								</div><br>
								<div class="col-sm-9 col-sm-offset-9">  
      								<td colspan="2" align="center"><input class="btn btn-warning" type="submit" value="simpan" name="submit"></td>
      							</div> 

								</form>
							</div>
						</section>
						

					<!-- end: page -->
				</section>
			</div>


<?php
						
if(isset($_POST["submit"])){
	date_default_timezone_set('Asia/Jakarta');
	$i=sizeof($_POST['cek']);
	for($x=0; $x<$i; $x++){
	if(!empty($_POST['cek'])){
	$kode=$_POST['code'][$x];
	$nama_kereta=$_POST['nama_kereta'];
	$jam = date('H:i:s');
	$tanggal = $_POST['tanggal'][$x];
	$kondisi=$_POST['cek'][$x];
	$user=$_COOKIE['nama'];

	$a=$object->simpanCheckCctvKereta($tanggal,$jam,$nama_kereta,$kode,$kondisi,$user);
	}

		if($a){
	    echo '<div id="tampil_modal">
		<div id="modal_blue">
		<div id="modal_atas_blue">Informasi</div>
		<p>Data Check CCTV Berhasil tersimpan!.</p>
		<a href="cctv_kereta.php"><button id="oke_blue">Oke</button></a>
		</div></div>';										
	    }
	}
}
								
?>

		</section>

		<!-- Vendor -->
		<script src="../assets/vendor/jquery/jquery.js"></script>
		<script src="../assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="../assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="../assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="../assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="../assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="../assets/vendor/select2/select2.js"></script>
		<script src="../assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
		<script src="../assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
		<script src="../assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="../assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="../assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="../assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="../assets/javascripts/tables/examples.datatables.default.js"></script>
		<script src="../assets/javascripts/tables/examples.datatables.defaultsatu.js"></script>
		<script src="../assets/javascripts/tables/examples.datatables.defaultdua.js"></script>
		<script src="../assets/javascripts/tables/examples.datatables.defaulttiga.js"></script>
		<script src="../assets/javascripts/tables/examples.datatables.defaultempat.js"></script>
		<script src="../assets/javascripts/tables/examples.datatables.defaultlima.js"></script>
		<script src="../assets/javascripts/tables/examples.datatables.row.with.details.js"></script>
		<script src="../assets/javascripts/tables/examples.datatables.tabletools.js"></script>
	</body>
</html>
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
	<body>
		<section class="body">

		<head>
		<?php include "header.php" ?>	

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

			<div class="inner-wrapper">

				<!-- start: sidebar -->
				<?php include "sidebar.php" ?>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					

					<header class="page-header">
						<h2>Jaringan Loket Customer Service</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.php">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Jaringan CS</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>
								
											<!--aaaaaa-->
								<div class="row">
									<div class="col-sm-6">
										<form method="post">
										<div class="col-sm-12">
											<label for=""><h4><b>Nama Stasiun : </b></h4></label>

												  <select name="nama">
												  	<?php 
													$query = "SELECT * FROM nama_stasiun ORDER BY stasiun ASC";

								 					$result = mysqli_query($koneksi, $query);

												   while($data = mysqli_fetch_assoc($result) ){?>

												    <option value="<?php echo $data['stasiun']; ?>"><?php echo $data['stasiun']; ?></option>

												   <?php } ?>

												  </select>
												<input type="submit" name="kirim_stasiun" class="btn btn-warning" value="Pilih">

										</div>
										<div class="col-sm-12">
											
											<div class="col-sm-9">
												
												
												
											</div>
										</div>
									</form>
									<?php
							
										    if(isset($_POST["kirim_stasiun"])){
											    $nama_stasiun=$_POST['nama'];
											    
												$jaringan_cs=$object->tampilkanjaringancs($nama_stasiun);
												}

												else{
												$jaringan_cs=$object->tampilkanjaringancssemua();
												}
									
								
									?>
									<br>
									</div>
								</div>

						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									
								</div>
						
								<h2 class="panel-title">Jaringan Customer Service</h2>
							</header>
							<div class="panel-body">
								<form method="post" action="">
									<div>
								<table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
										<tr>
											<th>Kode Loket</th>
											<th>Nama Stasiun</th>
											<th>Nama CS</th>
											<th><center>Kondisi</center></th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										    $i = 0;
										    WHILE ($row_k = mysqli_fetch_array($jaringan_cs)) :
										    ?>
										    <tr>
										    <td>
										    	
										    	<input type="hidden" name="code[]" value="<?php echo $row_k['kode']; ?>"><?php echo $row_k['kode']; ?>
										    </td>
										    
										    <td><input type="hidden" name="nama_stasiun[]" value="<?php echo $row_k['nama_stasiun']; ?>"><?php echo $row_k['nama_stasiun']; ?>
										    	<td><?php echo $row_k['nama_cs']; ?></td>
										    </td>
										    <td>
										    	<input type="checkbox" name="cek[]" value="baik"> Baik &nbsp || &nbsp

										    	<input type="checkbox" name="cek[]" value="rusak"> Rusak
										    </td>

										    <td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
												<a href="edit_jaringan_cs.php?kode=<?php echo $row_k['kode']; ?>" class="on-default edit-row"><i class="fa fa-pencil">Ubah</i></a>
												<a href="hapus_cs_jaringan.php?kode=<?php echo $row_k['kode']; ?>" class="on-default remove-row"><i class="fa fa-trash-o">Hapus</i></a>
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
									<td><input type="checkbox" name="allboxbaik" value="check" onclick="checkAll(1);" /> Baik semua ||
									<input type="checkbox" name="allboxrusak" value="check" onclick="checkAll(1);" /> Rusak semua</td>
									<td></td>
								</table>
								</div>
								<br>
								<div class="col-sm-9 col-sm-offset-9">  
      								<td colspan="2" align="center"><input class="btn btn-warning" type="submit" value="simpan" name="submit"></td>
      							</div> 

								</form>
							</div>
						</section>

						




<?php
						
if(isset($_POST["submit"])){
	date_default_timezone_set('Asia/Jakarta');
	$i=sizeof($_POST['cek']);

	for($x=0; $x<$i; $x++){
		if(!empty($_POST['cek'])){
    	$time = date('H:i:s');
	    $tanggal = date('Ymd');
	    $kode=$_POST['code'][$x];
	    $kondisi=$_POST['cek'][$x];
	    $user=$_COOKIE['nama'];

    	$a=$object->simpanCheckJaringanCS($tanggal,$time,$kode,$kondisi,$user);

    	}
    	if($a){
	    echo '<div id="tampil_modal">
		<div id="modal_blue">
		<div id="modal_atas_blue">Informasi</div>
		<p>Data Check Jaringan Berhasil disimpan!.</p>
		<a href="cs.php"><button id="oke_blue">Oke</button></a>
		</div></div>';										
	    }


	}

}
								
?>

					<!-- end: page -->
				</section>
			</div>

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
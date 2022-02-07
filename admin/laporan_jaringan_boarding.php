<?php

    if((!isset($_COOKIE['user']) && !isset($_COOKIE['pass'])))
    {
        echo"<script>alert('Anda Belum Login,silakan login terlebih dahulu'); document.location='../index.php';</script>";
    }

?>
<?php include "head.php" ?>
	<body>
	
		<?php
			require "../Fungsi.php";
$object = new fungsi();
$koneksi=$object->koneksi();
		?>
		<section class="body">

			<!-- start: header -->
			<?php include "header.php" ?>
			<!-- end: header -->

			<div class="inner-wrapper">

				<!-- start: sidebar -->
				<?php include "sidebar.php" ?>
				<!-- end: sidebar --><html>
				<section role="main" class="content-body">
					

					<header class="page-header">
						<h2>Laporan</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.php">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Laporan</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>
		<form action="laporan_jaringan_boarding.php" method="post" name="postform">
			<p align="center"><font color="orange" size="5"><b>Laporan Jaringan Boarding</b></font></p><br />
			<table border="0">
				<div class="row">
									<div class="col-sm-6">
										<form method="post">
										<div class="col-sm-18">
											<label for=""><h4><b>Nama Stasiun : </b></h4></label>

												  <select name="nama">
												  	<?php 
													$query = "SELECT * FROM nama_stasiun ORDER BY stasiun ASC";

								 					$result = mysqli_query($koneksi, $query);

												   while($data = mysqli_fetch_assoc($result) ){?>

												    <option value="<?php echo $data['stasiun']; ?>"><?php echo $data['stasiun']; ?></option>

												   <?php } ?>

												  </select>
											</div>
				<tr>
					<td width="125"><b>Dari Tanggal</b></td>
					<td colspan="2" width="190">: <input type="text" name="tanggal_awal" size="16" />
					<a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tanggal_awal);return false;" ><img src="calender/calbtn.gif" alt="" name="popcal" width="34" height="29" border="0" align="absmiddle" id="popcal" /></a>				
					</td>
					<td width="125"><b>Sampai Tanggal</b></td>
					<td colspan="2" width="190">: <input type="text" name="tanggal_akhir" size="16" />
					<a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tanggal_akhir);return false;" ><img src="calender/calbtn.gif" alt="" name="popcal" width="34" height="29" border="0" align="absmiddle" id="popcal" /></a>				
					</td>
					<td colspan="2" width="190"><input type="submit" value="Pencarian Data" name="pencarian"/></td>
					<td colspan="2" width="70"><input type="reset" value="Reset" class="btn btn-info"  /></td>
				</tr>
			</table>
		</form><br />

		<p>
		<?php
			//proses jika sudah klik tombol pencarian data
			if(isset($_POST['pencarian'])){
			//menangkap nilai form
			$nama_stasiun=$_POST['nama'];
			$tanggal_awal=$_POST['tanggal_awal'];
			$tanggal_akhir=$_POST['tanggal_akhir'];
			if(empty($tanggal_awal) || empty($tanggal_akhir)){
			//jika data tanggal kosong
			?>
			<script language="JavaScript">
				alert('Tanggal Awal dan Tanggal Akhir Harap di Isi!');
				document.location='laporan_jaringan_boarding.php';
			</script>
			<?php
			}else{
			?><i><b>Informasi : </b> Hasil pencarian data berdasarkan periode Tanggal <b><?php echo $_POST['tanggal_awal']?></b> s/d <b><?php echo $_POST['tanggal_akhir']?></b></i>
			<?php
			$query=mysqli_query($koneksi,"SELECT * from kondisi_jaringan_boarding INNER JOIN jaringan_boarding ON jaringan_boarding.kode = kondisi_jaringan_boarding.kode_jaringan where `nama_stasiun`='$nama_stasiun' and tanggal between '$tanggal_awal' and '$tanggal_akhir'");
			}
		?>
		<br>
		<a style="margin-bottom:10px" href="excel_jaringan_boarding.php?awal=<?php echo $_POST['tanggal_awal']?>&akhir=<?php echo $_POST['tanggal_akhir']?>&nama=<?php echo $_POST['nama']?>" target="_blank" class="btn btn-default pull-right"><span class='glyphicon glyphicon-print'></span>  Excel</a>
		<a style="margin-bottom:10px" href="pdf_jaringan_boarding_fix.php?awal=<?php echo $_POST['tanggal_awal']?>&akhir=<?php echo $_POST['tanggal_akhir']?>&nama=<?php echo $_POST['nama']?>" target="_blank" class="btn btn-default pull-right"><span class='glyphicon glyphicon-print'></span>  PDF</a>
		</p>
		<table class="table table-bordered table-striped mb-none" id="datatable-editable">
			<tr bgcolor="#FF6600">
				<th>Kode Jaringan</th>
				<th>Nama Boarding</th>
				<th>Nama Stasiun</th>
				<th>Tanggal</th>
				<th>Jam</th>
				<th>Kondisi</th>
				<th>Pemeriksa</th>	     
			</tr>
			<?php
			//menampilkan pencarian data
			while($row=mysqli_fetch_array($query)){
			?>
			<tr>
				<td><?php echo $row['kode_jaringan'];?></td>
				<td><?php echo $row['nama_boarding'];?></td>
				<td><?php echo $row['nama_stasiun'];?></td>
				<td height="30"><?php echo $row['tanggal']; ?></td>
				<td><?php echo $row['jam']; ?></td>
				<td><?php echo $row['kondisi'];?></td>
				<td><?php echo $row['pemeriksa'];?></td>
			</tr>
			<?php
			}
			?>    
			<tr>
				<td colspan="4" align="center"> 
				<?php
				//jika pencarian data tidak ditemukan
				if(mysqli_num_rows($query)==0){
					echo "<font color=red><blink>Pencarian data tidak ditemukan!</blink></font>";
				}
				?>
				</td>
			</tr> 
		</table>
		<?php
		}
		else{
			unset($_POST['pencarian']);
		}
		?>
		<iframe width=174 height=189 name="gToday:normal:calender/normal.js" id="gToday:normal:calender/normal.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:fixed; top:-500px; left:-500px;"></iframe>

		<?php include "script.php" ?>	
	</body>
</html>
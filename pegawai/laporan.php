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
$koneksi=$object->koneksi("localhost","root","","kai");
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
		<form action="laporan.php" method="post" name="postform">
			<p align="center"><font color="orange" size="3"><b>Laporan Berdasarkan Periode Tanggal</b></font></p><br />
			<table border="0">
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
					<td colspan="2" width="70"><input type="reset" value="Reset" /></td>
				</tr>
			</table>
		</form><br />
		<p>
		<?php
			//proses jika sudah klik tombol pencarian data
			if(isset($_POST['pencarian'])){
			//menangkap nilai form
			$tanggal_awal=$_POST['tanggal_awal'];
			$tanggal_akhir=$_POST['tanggal_akhir'];
			if(empty($tanggal_awal) || empty($tanggal_akhir)){
			//jika data tanggal kosong
			?>
			<script language="JavaScript">
				alert('Tanggal Awal dan Tanggal Akhir Harap di Isi!');
				document.location='laporan.php';
			</script>
			<?php
			}else{
			?><i><b>Informasi : </b> Hasil pencarian data berdasarkan periode Tanggal <b><?php echo $_POST['tanggal_awal']?></b> s/d <b><?php echo $_POST['tanggal_akhir']?></b></i>
			<?php
			$query=mysqli_query($koneksi,"select * from stasiun_cctv_kondisi where tanggal between '$tanggal_awal' and '$tanggal_akhir'");
			}
		?>
		</p>
		<table class="table table-bordered table-striped mb-none" id="datatable-editable">
			<tr bgcolor="#FF6600">
				<th>Tanggal</th>
				<th>Jam</th>
				<th>Kode Asset</th>
				<th>Kondisi</th>	     
			</tr>
			<?php
			//menampilkan pencarian data
			while($row=mysqli_fetch_array($query)){
			?>
			<tr>
				<td height="30"><?php echo $row['tanggal']; ?></td>
				<td><?php echo $row['jam']; ?></td>
				<td><?php echo $row['kode_cctv'];?></td>
				<td><?php echo $row['kondisi'];?></td>
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
<?php

    if((!isset($_COOKIE['user']) && !isset($_COOKIE['pass'])))
    {
        echo"<script>alert('Anda Belum Login,silakan login terlebih dahulu'); document.location='../index.php';</script>";
    }

?>
<?php include "head.php" 

?>
	<body>
	
		<?php
			require "../fungsi.php";
$object = new fungsi();
$koneksi=$object->koneksi();

header("Content-Type: application/force-download");
 header("Cache-Control: no-cache, must-revalidate");
 header("Expires: Sat, 26 Jul 2010 05:00:00 GMT"); 
 header("content-disposition: attachment;filename=laporan_jaringan_cs".date('dmY').".xls");
		?>
		<section class="body">

			
				<!-- end: sidebar --><html>
		
 
		<p>

			
			<?php
			$awal=$_GET['awal'];
			$akhir=$_GET['akhir'];
			$nama_stasiun=$_GET['nama'];
			$query=mysqli_query($koneksi,"SELECT * from kondisi_jaringan_cs INNER JOIN jaringan_cs ON jaringan_cs.kode = kondisi_jaringan_cs.kode_jaringan where `nama_stasiun`='$nama_stasiun'and tanggal between '$awal' and '$akhir'");		?>
		<br>
		
		</p>
		<table class="table table-bordered table-striped mb-none" id="datatable-editable">
			<tr bgcolor="#FF6600">
				<th>Kode Jaringan</th>
				<th>Nama CS</th>
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
				<td><?php echo $row['nama_cs'];?></td>
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
		
		
		?>
		<iframe width=174 height=189 name="gToday:normal:calender/normal.js" id="gToday:normal:calender/normal.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:fixed; top:-500px; left:-500px;"></iframe>

		<?php include "script.php" ?>	
	</body>
</html>
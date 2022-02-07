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
require('../assets/pdf/fpdf.php');

$pdf = new FPDF("L","cm","A4");

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);
$pdf->Image('logo/kai.png',1.5,1,2,2);
$pdf->SetX(4);            
$pdf->MultiCell(19.5,0.5,'PT. Kereta Api Indonesia (Persero)',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Unit Sistem Informasi Divre III Palembang',0,'L');    
$pdf->SetFont('Arial','B',10);
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Telpon : 70991',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Laporan Kondisi Perangkat IT',0,'L');
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,28.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25.5,0.7,"Laporan Kondisi CCTV Stasiun",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Kode Asset', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Jenis Locotrack', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Tanggal', 1, 0, 'C');
$pdf->Cell(2, 0.8, 'Jam', 1, 0, 'C');
$pdf->Cell(2, 0.8, 'Kondisi', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Pemeriksa', 1, 1, 'C');
$pdf->SetFont('Arial','',10);
$no=1;
$awal=$_GET['awal'];
$akhir=$_GET['akhir'];
$nama_locotrack=$_GET['nama'];
$query=mysqli_query($koneksi,"SELECT * from kondisi_locotrack INNER JOIN locotrack ON locotrack.kode = kondisi_locotrack.kode_locotrack where `jenis_locotrack`='$nama_locotrack' and tanggal between '$awal' and '$akhir'");
			
while($lihat=mysqli_fetch_array($query)){
	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(3, 0.8, $lihat['kode_locotrack'],1, 0, 'C');
	$pdf->Cell(3, 0.8, $lihat['jenis_locotrack'],1, 0, 'C');
	$pdf->Cell(3, 0.8, $lihat['tanggal'],1, 0, 'C');
	$pdf->Cell(2, 0.8, $lihat['jam'], 1, 0,'C');
	$pdf->Cell(2, 0.8, $lihat['kondisi'], 1, 0,'C');
	$pdf->Cell(4, 0.8, $lihat['pemeriksa'], 1, 1,'C');

	$no++;
}
$pdf->ln(2);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(45,0.7,"Palembang, ".date("d M Y"),0,0,'C');
$pdf->ln(2);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(45,0.7,'Pemeriksa',0,0,'C');

$pdf->Output("laporan_locotrack.pdf","I");

?>


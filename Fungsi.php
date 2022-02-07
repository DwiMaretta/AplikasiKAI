<?php

class Fungsi{

	public $conn;

	function koneksi(){
		$host="localhost";
		$username="root";
		$password="";
		$dbname="kai_check"; 
		$this->conn = mysqli_connect($host,$username,$password,$dbname);
        return ($this->conn);
	}

	public function cek_login($username,$password){

		$query="SELECT * FROM `user` WHERE `username`='$username' AND `password`='$password'";
		$hasil=mysqli_query($this->conn,$query);
			if(!$hasil)
				{
					
					redirect('login.php');
				}else{
					switch($role_id){
							case 1: redirect('admin/index.php');
								break;
							case 2: redirect ('manager/index.php');
								break;
							case 3: redirect ('pegawai/index.php');
								break;
							default: break;
									}
					}
		return $hasil;				
	}


	function query($query){

		$hasil=mysqli_query($this->conn,$query);
		//if (!$hasil) {
   		//printf("Error: %s\n", mysqli_error($this->conn));
    	//exit();
		//}

		//if (!$hasil){
		//die("Penyimpanan gagal!!!");
		//}

		//$rows = [];
		//while ($row  = mysqli_fetch_array($this->conn,$hasil)){
		//	$rows[] = $row;
		//}
		
		return $hasil;
		
	}

//CCTV Stsiun

		function tampilkancctvstasiun($nama_stasiun){

			$query="SELECT * FROM cctv_stasiun WHERE `nama_stasiun`='$nama_stasiun'";
			return $this->query($query);

		}
		
		function tampilkancctvstasiunsemua(){

			$query="SELECT * FROM cctv_stasiun";
			return $this->query($query);

		}

		function simpandatacctvstasiun($kode,$nama_stasiun,$lokasi){

			$query="INSERT INTO `cctv_stasiun` (`kode`,`nama_stasiun`,`lokasi`) VALUES ('$kode','$nama_stasiun','$lokasi')";
			return $this->query($query);

		}
		function edit_cctv_stasiun($kode){

			$query="SELECT * FROM `cctv_stasiun` where `kode`='$kode'";
			return $this->query($query);

		}

		function simpanubahcctvstasiun($kode,$nama_stasiun,$lokasi){

			$query="UPDATE cctv_stasiun SET `kode`='$kode',`nama_stasiun`='$nama_stasiun',`lokasi`='$lokasi' WHERE `kode`='$kode'";
			return $this->query($query);

		}

		function hapuscctvstasiun($kode){

			$query="DELETE FROM cctv_stasiun WHERE `kode`='$kode'";
			return $this->query($query);

		}

		function simpanCheckCctvStasiun($tanggal,$jam,$kode,$kondisi,$user){

			$query="INSERT INTO kondisi_cctv_stasiun (tanggal,jam,kode_cctv,kondisi,pemeriksa) VALUES ('$tanggal','$jam','$kode','$kondisi','$user') ";
			return $this->query($query);
		}

//CCTV kantor
		function tampilkancctvkantor(){

			$query="SELECT * FROM cctv_kantor";
			return $this->query($query);

		}
		function simpandatacctvkantor($kode,$lokasi){

			$query="INSERT INTO `cctv_kantor` (`kode`,`lokasi`) VALUES ('$kode','$lokasi')";
			return $this->query($query);

		}
		function edit_cctv_kantor($kode){

			$query="SELECT `kode`,`nama_stasiun` FROM `cctv_kantor` where `kode`='$kode'";
			return $this->query($query);

		}

		function simpanubahcctvkantor($kode,$nama_stasiun){

			$query="UPDATE cctv_kantor SET `kode`='$kode',`nama_stasiun`='$nama_stasiun' WHERE `kode`='$kode'";
			return $this->query($query);

		}

		function hapuscctvkantor($kode){

			$query="DELETE FROM cctv_kantor WHERE `kode`='$kode'";
			return $this->query($query);

		}

		function simpanCheckCctvKantor($tanggal,$jam,$kode,$kondisi,$user){

			$query="INSERT INTO kondisi_cctv_kantor (tanggal,jam,kode_cctv,kondisi,pemeriksa) VALUES ('$tanggal','$jam','$kode','$kondisi','$user') ";
			return $this->query($query);
		}


		//CCTV kereta
		function tampilkancctvkeretasemua(){

			$query="SELECT * FROM cctv_kereta ";
			return $this->query($query);

		}

		function tampilkancctvkereta($nama_kereta){

			$query="SELECT * FROM cctv_kereta WHERE `nama_kereta`='$nama_kereta'";
			return $this->query($query);

		}

		function simpandatacctvkereta($kode,$lokasi,$nama_kereta,$tanggal){

			$query="INSERT INTO `cctv_kereta` (`kode`,`lokasi`,`nama_kereta`,`tanggal`) VALUES ('$kode','$lokasi','$nama_kereta','$tanggal')";
			return $this->query($query);

		}
		function edit_cctv_kereta($kode){

			$query="SELECT * FROM `cctv_kereta` where `kode`='$kode'";
			return $this->query($query);

		}

		function simpanubahcctvkereta($kode,$lokasi,$nama_kereta,$tanggal){

			$query="UPDATE cctv_kereta SET `kode`='$kode',`lokasi`='$lokasi',`nama_kereta`='$nama_kereta',`tanggal`='$tanggal' WHERE `kode`='$kode'";
			return $this->query($query);

		}

		function hapuscctvkereta($kode){

			$query="DELETE FROM cctv_kereta WHERE `kode`='$kode'";
			return $this->query($query);

		}

		function simpanCheckCctvKereta($tanggal,$jam,$nama_kereta,$kode,$kondisi,$user){

			$query="INSERT INTO kondisi_cctv_di_kereta (tanggal_cek,jam,nama_kereta_cek,kode_cctv,kondisi,pemeriksa) VALUES ('$tanggal','$jam','$nama_kereta','$kode','$kondisi','$user') ";
			return $this->query($query);
		}

//User
		function tampilkanusersemua(){

			$query="SELECT * FROM user";
			return $this->query($query);

		}

		function tampilkanuserbagian($bagian){

			$query="SELECT * FROM user WHERE `bagian`='$bagian'";
			return $this->query($query);

		}

		function tambahUser($bagian,$username,$password,$nama,$role_id){
			$query="INSERT INTO user(`bagian`,`username`,`password`,`nama`,`role_id`) VALUES ('$bagian','$username','$password','$nama','$role_id')";
			return $this->query($query);

		}

		function hapusUser($username){
			$query="DELETE FROM user WHERE `username`='$username'";
			return $this->query($query);
		}

		function editUser($username){
			$query="SELECT * FROM user WHERE `username`='$username'";
			return $this->query($query);
		}

		function simpanUbahUser($bagian,$username,$password,$nama,$role_id){
			$query="UPDATE user SET `bagian`='$bagian',`username`='$username',`password`='$password',`nama`='$nama',`role_id`='$role_id' WHERE `username`='$username'";
			return $this->query($query);
		}


//Boarding Jaringan

		function tampilkanjaringanboardingsemua(){

			$query="SELECT * FROM jaringan_boarding";
			return $this->query($query);

		}
		function tampilkanjaringanboarding($nama_stasiun){

			$query="SELECT * FROM jaringan_boarding WHERE `nama_stasiun`='$nama_stasiun'";
			return $this->query($query);

		}
		
		function simpandatajaringanboarding($kode,$nama_boarding,$nama_stasiun){

			$query="INSERT INTO `jaringan_boarding` (`kode`,`nama_boarding`,`nama_stasiun`) VALUES ('$kode','$nama_boarding','$nama_stasiun')";
			return $this->query($query);

		}
		function edit_jaringan_boarding($kode){

			$query="SELECT * FROM `jaringan_boarding` where `kode`='$kode'";
			return $this->query($query);

		}

		function simpanubahjaringanboarding($kode,$nama_boarding,$nama_stasiun){

			$query="UPDATE jaringan_boarding SET `kode`='$kode',`nama_boarding`='$nama_boarding',`nama_stasiun`='$nama_stasiun' WHERE `kode`='$kode'";
			return $this->query($query);

		}

		function hapusjaringanboarding($kode){

			$query="DELETE FROM jaringan_boarding WHERE `kode`='$kode'";
			return $this->query($query);

		}

		function simpanCheckJaringanBoarding($tanggal,$jam,$kode,$kondisi,$user){

			$query="INSERT INTO kondisi_jaringan_boarding (tanggal,jam,kode_jaringan,kondisi,pemeriksa) VALUES ('$tanggal','$jam','$kode','$kondisi','$user') ";
			return $this->query($query);
		}



//Jaringan Loket

		function tampilkanjaringanloket($nama_stasiun){

			$query="SELECT * FROM jaringan_loket WHERE `nama_stasiun`='$nama_stasiun'";
			return $this->query($query);

		}
		function tampilkanjaringanloketsemua(){

			$query="SELECT * FROM jaringan_loket";
			return $this->query($query);

		}
		function simpandatajaringanloket($kode,$nama_loket,$nama_stasiun){

			$query="INSERT INTO `jaringan_loket` (`kode`,`nama_loket`,`nama_stasiun`) VALUES ('$kode','$nama_loket','$nama_stasiun')";
			return $this->query($query);

		}
		function edit_jaringan_loket($kode){

			$query="SELECT * FROM `jaringan_loket` where `kode`='$kode'";
			return $this->query($query);

		}

		function simpanubahjaringanloket($kode,$nama_loket,$nama_stasiun){

			$query="UPDATE jaringan_loket SET `kode`='$kode',`nama_loket`='$nama_loket',`nama_stasiun`='$nama_stasiun' WHERE `kode`='$kode'";
			return $this->query($query);

		}

		function hapusloketjaringan($kode){

			$query="DELETE FROM jaringan_loket WHERE `kode`='$kode'";
			return $this->query($query);

		}

		function simpanCheckJaringanLoket($tanggal,$jam,$kode,$kondisi,$user){

			$query="INSERT INTO kondisi_jaringan_loket (tanggal,jam,kode_jaringan,kondisi,pemeriksa) VALUES ('$tanggal','$jam','$kode','$kondisi','$user') ";
			return $this->query($query);
		}


//Customer Service Jaringan

		function tampilkanjaringancssemua(){

			$query="SELECT * FROM jaringan_cs";
			return $this->query($query);

		}
		function tampilkanjaringancs($nama_stasiun){

			$query="SELECT * FROM jaringan_cs WHERE `nama_stasiun`='$nama_stasiun'";
			return $this->query($query);

		}
		
		function simpandatajaringancs($kode,$nama_cs,$nama_stasiun){

			$query="INSERT INTO `jaringan_cs` (`kode`,`nama_cs`,`nama_stasiun`) VALUES ('$kode','$nama_cs','$nama_stasiun')";
			return $this->query($query);

		}
		function edit_jaringan_cs($kode){

			$query="SELECT `nama_cs`,`nama_stasiun` FROM `jaringan_cs` where `kode`='$kode'";
			return $this->query($query);

		}

		function simpanubahjaringancs($kode,$nama_loket,$nama_stasiun){

			$query="UPDATE jaringan_cs SET `kode`='$kode',`nama_cs`='$nama_loket',`nama_stasiun`='$nama_stasiun' WHERE `kode`='$kode'";
			return $this->query($query);

		}

		function hapusjaringancs($kode){

			$query="DELETE FROM jaringan_cs WHERE `kode`='$kode'";
			return $this->query($query);

		}

		function simpanCheckJaringanCS($tanggal,$jam,$kode,$kondisi,$user){

			$query="INSERT INTO kondisi_jaringan_cs (tanggal,jam,kode_jaringan,kondisi,pemeriksa) VALUES ('$tanggal','$jam','$kode','$kondisi','$user') ";
			return $this->query($query);
		}


		//CIC Jaringan

		function tampilkanjaringancicsemua(){

			$query="SELECT * FROM jaringan_cic";
			return $this->query($query);

		}
		function tampilkanjaringancic($nama_stasiun){

			$query="SELECT * FROM jaringan_cic WHERE `nama_stasiun`='$nama_stasiun'";
			return $this->query($query);

		}

		function simpandatajaringancic($kode,$nama_stasiun,$nama_cic){

			$query="INSERT INTO `jaringan_cic` (`kode`,`nama_stasiun`,`nama_cic`) VALUES ('$kode','$nama_stasiun','$nama_cic')";
			return $this->query($query);

		}
		function edit_jaringan_cic($kode){

			$query="SELECT * FROM `jaringan_cic` where `kode`='$kode'";
			return $this->query($query);

		}

		function simpanubahjaringancic($kode,$nama_cic,$nama_stasiun){

			$query="UPDATE jaringan_cic SET `kode`='$kode',`nama_cic`='$nama_cic',`nama_stasiun`='$nama_stasiun' WHERE `kode`='$kode'";
			return $this->query($query);

		}

		function hapusjaringancic($kode){

			$query="DELETE FROM jaringan_cic WHERE `kode`='$kode'";
			return $this->query($query);

		}

		function simpanCheckJaringanCIC($tanggal,$jam,$kode,$kondisi,$user){

			$query="INSERT INTO kondisi_jaringan_cic (tanggal,jam,kode_jaringan,kondisi,pemeriksa) VALUES ('$tanggal','$jam','$kode','$kondisi','$user') ";
			return $this->query($query);
		}


		//TD
		function tampilkanjaringantdsemua(){

			$query="SELECT * FROM jaringan_td";
			return $this->query($query);

		}
		function tampilkanjaringantd($nama_stasiun){

			$query="SELECT * FROM jaringan_td WHERE `nama_stasiun`='$nama_stasiun'";
			return $this->query($query);

		}
		
		function simpandatajaringantd($kode,$nama_stasiun,$nama_td){

			$query="INSERT INTO `jaringan_td` (`kode`,`nama_stasiun`,`nama_td`) VALUES ('$kode','$nama_stasiun','$nama_td')";
			return $this->query($query);

		}
		function edit_jaringan_td($kode){

			$query="SELECT * FROM `jaringan_td` where `kode`='$kode'";
			return $this->query($query);

		}

		function simpanubahjaringantd($kode,$nama_loket,$nama_stasiun){

			$query="UPDATE jaringan_td SET `kode`='$kode',`nama_td`='$nama_td',`nama_stasiun`='$nama_stasiun' WHERE `kode`='$kode'";
			return $this->query($query);

		}

		function hapusjaringantd($kode){

			$query="DELETE FROM jaringan_td WHERE `kode`='$kode'";
			return $this->query($query);

		}

		function simpanCheckJaringanTD($tanggal,$jam,$kode,$kondisi,$user){

			$query="INSERT INTO kondisi_jaringan_td (tanggal,jam,kode_jaringan,kondisi,pemeriksa) VALUES ('$tanggal','$jam','$kode','$kondisi','$user') ";
			return $this->query($query);
		}



		//LOCOTRACk
		function tampilkanlocotrack($locotrack){
			$query="SELECT * FROM locotrack WHERE `jenis_locotrack`='$locotrack'";
			return $this->query($query);
		}

		function tampilkanlocotracksemua(){
			$query="SELECT * FROM locotrack";
			return $this->query($query);
		}

		function tampilkanlocotrackCC201(){
			$query="SELECT * FROM locotrack WHERE `jenis_locotrack`='CC201'";
			return $this->query($query);
		}

		function tampilkanlocotrackCC204(){
			$query="SELECT * FROM locotrack WHERE `jenis_locotrack`='CC204'";
			return $this->query($query);
		}

		function tampilkanlocotrackCC206(){
			$query="SELECT * FROM locotrack WHERE `jenis_locotrack`='CC206'";
			return $this->query($query);
		}

		function tampilkanlocotrackSR(){
			$query="SELECT * FROM locotrack WHERE `jenis_locotrack`='SR'";
			return $this->query($query);
		}

		function hapuslocotrack($kode){
			$query="DELETE FROM locotrack WHERE `kode`='$kode'";
			return $this->query($query);
		}

		function simpandatalocotrack($kode,$locotrack){

			$query="INSERT INTO `locotrack` (`kode`,`jenis_locotrack`) VALUES ('$kode','$locotrack')";
			return $this->query($query);

		}

		function editlocotrack($kode){

			$query="SELECT * FROM `locotrack` where `kode`='$kode'";
			return $this->query($query);

		}

		function simpanubahlocotrack($kode,$jenis_locotrack){

			$query="UPDATE locotrack SET `kode`='$kode',`jenis_locotrack`='$jenis_locotrack' WHERE `kode`='$kode'";
			return $this->query($query);

		}

		function simpanCheckLocotrack($tanggal,$jam,$kode,$kondisi,$user){

			$query="INSERT INTO kondisi_locotrack (tanggal,jam,kode_locotrack,kondisi,pemeriksa) VALUES ('$tanggal','$jam','$kode','$kondisi','$user') ";
			return $this->query($query);
		}

		//jumlah aset

		function jumlahCctvStasiun(){
			$result=mysqli_query($this->conn,"SELECT count(*) as total from cctv_stasiun");
			$data=mysqli_fetch_assoc($result);
			return $data['total'];
		}

		function jumlahCctvKereta(){
			$result=mysqli_query($this->conn,"SELECT count(*) as total from cctv_kereta");
			$data=mysqli_fetch_assoc($result);
			return $data['total'];
		}

		function jumlahCctvKantor(){
			$result=mysqli_query($this->conn,"SELECT count(*) as total from cctv_kantor");
			$data=mysqli_fetch_assoc($result);
			return $data['total'];
		}
		
		function jumlahLoketBerjaringan(){
			$result=mysqli_query($this->conn,"SELECT count(*) as total from jaringan_loket");
			$data=mysqli_fetch_assoc($result);
			return $data['total'];
		}

		function jumlahCsBerjaringan(){
			$result=mysqli_query($this->conn,"SELECT count(*) as total from jaringan_cs");
			$data=mysqli_fetch_assoc($result);
			return $data['total'];
		}

		function jumlahBoardingBerjaringan(){
			$result=mysqli_query($this->conn,"SELECT count(*) as total from jaringan_boarding");
			$data=mysqli_fetch_assoc($result);
			return $data['total'];
		}

		function jumlahTdBerjaringan(){
			$result=mysqli_query($this->conn,"SELECT count(*) as total from jaringan_td");
			$data=mysqli_fetch_assoc($result);
			return $data['total'];
		}

		function jumlahCicBerjaringan(){
			$result=mysqli_query($this->conn,"SELECT count(*) as total from jaringan_cic");
			$data=mysqli_fetch_assoc($result);
			return $data['total'];
		}

		function jumlahPegawai(){
			$result=mysqli_query($this->conn,"SELECT count(*) as total from user WHERE `role_id`=3");
			$data=mysqli_fetch_assoc($result);
			return $data['total'];
		}

		function jumlahUser(){
			$result=mysqli_query($this->conn,"SELECT count(*) as total from user");
			$data=mysqli_fetch_assoc($result);
			return $data['total'];
		}




}

?>
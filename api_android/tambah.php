<?php
	require_once('koneksi.php');
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$nama_pelapor		= $_POST['nama_pelapor'];
		$alamat_pelapor		= $_POST['alamat_pelapor'];
		$no_hp				= $_POST['no_hp'];
		$jenis_kejadian		= $_POST['jenis_kejadian'];
		$lokasi_kejadian	= $_POST['lokasi_kejadian'];
		$created_at			= $_POST['created_at'];
		$updated_at			= $_POST['updated_at'];
		$sql 			 	= "INSERT INTO data (nama_pelapor,alamat_pelapor,no_hp,jenis_kejadian,lokasi_kejadian,created_at,updated_at) VALUES ('$nama_pelapor','$alamat_pelapor','$no_hp','$jenis_kejadian','$lokasi_kejadian','$created_at','$updated_at')";
		
		if(mysqli_query($con,$sql)){
			echo json_encode(array('status' => 'OK', 'message' => 'Berhasil Melaporkan'));
		}else{
			echo json_encode(array('status' => 'KO', 'message' => 'Gagal Melaporkan'));
		}
		
		mysqli_close($con);
	}
?>
<?php
	//Mendapatkan Nilai Dari Variable ID Pegawai yang ingin ditampilkan
	$id = $_GET['id'];
	
	//Importing database
	require_once('koneksi.php');
	
	//Membuat SQL Query dengan pegawai yang ditentukan secara spesifik sesuai ID
	$sql = "SELECT * FROM tb_pegawai WHERE id=$id";
	
	//Mendapatkan Hasil 
	$r = mysqli_query($con,$sql);
	
	//Memasukkan Hasil Kedalam Array
	$result = array();
	$row = mysqli_fetch_array($r);
	array_push($result,array(
		"id"=>$row['id'],
		"name"=>$row['nama'],
		"position"=>$row['posisi'],
		"salary"=>$row['gaji'],
		"image"=>$row['image']
		));
 
	//Menampilkan dalam format JSON
	if ($result[0]['id'] !=""){
		echo json_encode($result[0]);
	}else{
		echo json_encode(array('status' => 'KO', 'message' => 'Data Tidak Ditemukan'));
	}

	mysqli_close($con);
?>
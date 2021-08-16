<?php 
	$nama = $_POST['nama'];
 
	if($nama == ""){
	header("location:createForm.php?nama=kosong");
	}else{
	echo "Nama anda adalah ". $nama;
}
?>
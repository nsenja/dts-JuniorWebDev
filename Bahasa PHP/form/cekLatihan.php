<?php
include 'connection.php';

	$nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tempat = $_POST['tempat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $usia = $_POST['usia'];

    mysqli_query($connect, "INSERT INTO mahasiswa(nama, alamat, tempat, jenis_kelamin, usia) VALUES ('$nama', '$alamat', '$tempat', '$jenis_kelamin','$usia')");
 
	if($nama == ""){
	header("location:Latihan.php?nama=kosong");
	}else{
	echo "Nama : $nama<br>";
    echo "Alamat : $alamat<br>";
    echo "Tempat : $tempat<br>";
    echo "Jenis Kelamin : $jenis_kelamin<br>";
    echo "Usia : $usia<br>";
}
?>
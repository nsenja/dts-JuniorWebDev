<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "db_siswa";

$connect = mysqli_connect($server, $user, $password, $nama_database);
echo "berhasil terkoneksi.....<br> ";
if( !$connect ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>
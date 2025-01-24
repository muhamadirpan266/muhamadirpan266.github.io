<?php

include "koneksi.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$prodi = $_POST['prodi'];

$update = mysqli_query($koneksi, "update datasiswa SET NAMA = '$nama', ALAMAT = '$alamat', JENIS_KELAMIN = '$jenis_kelamin', PRODI = '$prodi' where NIM ='$nim'");

if ($update){
	echo "<script> alert ('data berhasil diubah')</script>";
	header ("refresh:0;index.php");
}else{
	echo "<script> alert ('data tidak berhasil diubah')</script>";
	header ("refresh:0;index.php");
}

?>
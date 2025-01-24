<?php
include "koneksi.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$prodi = $_POST['prodi'];


$simpan = mysqli_query($koneksi, "insert into datasiswa values('$nim', '$nama', '$alamat', '$jenis_kelamin', '$prodi')");
if ($simpan){
	echo "<script> alert ('data berhasil di simpan')</script>";
	header ("refresh:0;index.php");
}else{
	echo "<script> alert ('data tidak berhasil di simpan')</script>";
	header ("refresh:0;index.php");
}

?><?php
include "koneksi.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$prodi = $_POST['prodi'];


$simpan = mysqli_query($koneksi, "insert into datasiswa values('$nim', '$nama', '$alamat', '$jenis_kelamin', '$prodi')");
if ($simpan){
	echo "<script> alert ('data berhasil di simpan')</script>";
	header ("refresh:0;index.php");
}else{
	echo "<script> alert ('data tidak berhasil di simpan')</script>";
	header ("refresh:0;index.php");
}

?><?php
include "koneksi.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$prodi = $_POST['prodi'];


$simpan = mysqli_query($koneksi, "insert into datasiswa values('$nim', '$nama', '$alamat', '$jenis_kelamin', '$prodi')");
if ($simpan){
	echo "<script> alert ('data berhasil di simpan')</script>";
	header ("refresh:0;index.php");
}else{
	echo "<script> alert ('data tidak berhasil di simpan')</script>";
	header ("refresh:0;index.php");
}

?><?php
include "koneksi.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$prodi = $_POST['prodi'];


$simpan = mysqli_query($koneksi, "insert into datasiswa values('$nim', '$nama', '$alamat', '$jenis_kelamin', '$prodi')");
if ($simpan){
	echo "<script> alert ('data berhasil di simpan')</script>";
	header ("refresh:0;index.php");
}else{
	echo "<script> alert ('data tidak berhasil di simpan')</script>";
	header ("refresh:0;index.php");
}

?>
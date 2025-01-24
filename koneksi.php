<?php

$host="sql312.infinityfree.com";
$user="if0_38062988";
$pass="lQVflq0XmLrgY";
$database="if0_38062988_dbuji";

$koneksi=mysqli_connect($host, $user, $pass);
if ($koneksi) {
	$buka=mysqli_select_db($koneksi,$database);
echo "Database terhubung";
if (!$buka) {
echo "Database tidak terhubung";
}
}else{
echo "Mysql tidak terhubung";
}

?>
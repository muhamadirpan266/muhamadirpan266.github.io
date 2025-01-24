<?php
		include "koneksi.php";

		$nim = $_GET ['nim'];
		$data = mysqli_query($koneksi, "select * from datasiswa where NIM ='$nim'");
		while ($tampil = mysqli_fetch_array($data)) {
		?>


<html>
	<head>
		<title>Ubah Data Siswa</title>
	</head>
	<body>
		<h3 align="center">Form Ubah Data</h3>

<form action="updatedata.php" method="post">
	<table align="center" bgcolor="red" width="60%">
<tr>
	<td>NIM</td>
	<td>:</td>
	<td>
		<input type="text" name="nim" size=20 value="<?php echo $tampil ['NIM'] ?>"></input>
	</td>
</tr>
<tr>
	<td>Nama Siswa</td>
	<td>:</td>
	<td>
		<input type="text" name="nama" size=20 value="<?php echo $tampil ['NAMA'] ?>"></input>
	</td>
</tr>
<tr>
	<td>Alamat Siswa</td>
	<td>:</td>
	<td>
	<textarea name="alamat" size=255><?php echo $tampil ['ALAMAT'] ?></textarea>
	</td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td>:</td>
<td>
<select name="jenis_kelamin">
<option value="<?php echo $tampil ['JENIS_KELAMIN'] ?>"><?php echo $tampil ['JENIS_KELAMIN'] ?></option>
<option value="LAKI-LAKI">LAKI-LAKI</option>
<option value="PEREMPUAN">PEREMPUAN</option>
</select>
</td>
</tr>
<tr>
<td>Prodi</td>
<td>:</td>
<td>
<select name="prodi">
<option value="<?php echo $tampil ['PRODI'] ?>"><?php echo $tampil ['PRODI'] ?></option>
<option value="DKV">DKV</option>
<option value="TKJ">TKJ</option>
</select>
</td>
</tr>
<tr>
<td></td>
<td></td>
<td>
<input type="submit" name="ubah" value="ubah">
<input type="reset" name="batal" value="Batal">
<input type="button" name="kembali" value="Kembali" onclick="self.history.back()">
</td>
	</table>
</form>

		<?php
		}
		?>
	</body>
</html>
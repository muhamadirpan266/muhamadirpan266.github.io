<html>
<head>
<title>Tambah data</title>
</head>
<body>

<h3 align="center">Form Tambah Data </h3>
<form action="simpandata.php" method="POST">
<table align="center" bgcolor="red" width=60%>

<tr>
<td>NIM</td>
<td>:</td>
<td>
<input type="text" name="nim" size="20" placeholder="Masukkan NIM Anda...">
</td>
</tr>
<tr>
<td>Nama Siswa</td>
<td>:</td>
<td>
<input type="text" name="nama" size="30" placeholder="Masukkan Nama Anda...">
</td>
</tr>
<tr>
<td>Alamat</td>
<td>:</td>
<td>
<textarea name="alamat" size=255 placeholder="Masukan Alamat Anda..."></textarea>
</td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td>:</td>
<td>
<select name="jenis_kelamin">
<option value="">--Pilih Jenis Kelamin--</option>
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
<option value="">--Pilih Prodi--</option>
<option value="DKV">DKV</option>
<option value="TKJ">TKJ</option>
</select>
</td>
</tr>
<tr>
<td></td>
<td></td>
<td>
<input type="submit" name="simpan" value="Simpan">
<input type="reset" name="batal" value="Batal">
<input type="button" name="kembali" value="Kembali" onclick="self.history.back()">
</td>
</table>
</form>
</body>
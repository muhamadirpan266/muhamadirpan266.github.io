<?php
// Mulai session untuk mendapatkan informasi login pengguna
session_start();

// Pastikan pengguna sudah login
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');  // Jika belum login, redirect ke halaman login
    exit();
}

$host = 'sql312.infinityfree.com';
$db_name = 'if0_38062988_user_management';
$username = 'if0_38062988';  // Sesuaikan dengan username MySQL Anda
$password = 'lQVflq0XmLrgY';  // Sesuaikan dengan password MySQL Anda

try {
    // Koneksi ke database
    $conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Ambil data pengguna berdasarkan user_id yang ada dalam session
    $user_id = $_SESSION['user_id'];
    $stmt = $conn->prepare("SELECT username, email FROM users WHERE id = :user_id");
    $stmt->bindParam(':user_id', $user_id);
    $stmt->execute();
    
    // Ambil data pengguna
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        echo "User not found.";
        exit();
    }
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<h2 align="center"> DATA YANG KAMI BUAT</h2>
<A href ="tambahdata.php">Tambah Data Baru</a>
<table border="1" align="center" width="100%">
<tr bgcolor="YELLOW">
<th>NIM</th>
<th>NAMA</th>
<th>ALAMAT</th>
<th>JENIS KELAMIN</th>
<th>JURUSAN</th>
</tr>
<tr>
<?php
	include "koneksi.php";
	$query = mysqli_query ($koneksi, "select * from datasiswa");
	while ($data = mysqli_fetch_array($query)){
?>
<td><?php echo $data['NIM']; ?></td>
<td><?php echo $data['NAMA']; ?></td>
<td><?php echo $data['ALAMAT']; ?></td>
<td><?php echo $data['JENIS_KELAMIN']; ?></td>
<td><?php echo $data['PRODI'];  ?></td>
<td>
<a href="ubahdata.php?nim=<?php echo $data ['NIM']; ?>"></a>

<a href="hapus.php?nim=<?php echo $data ['NIM']; ?>"></a>
</td>
</tr>
<?php
}
?>
</table>
</body>
</html>
<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "SELECT * FROM pegawai WHERE id = $id";
$result = $conn->query($query);
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $gaji = $_POST['gaji'];

    $query = "UPDATE pegawai SET nama='$nama', jabatan='$jabatan', gaji='$gaji' WHERE id=$id";
    if ($conn->query($query)) {
        header("Location: index.php");
    } else {
        echo "Gagal mengupdate data!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Edit Pegawai</title>
</head>
<body>
    <h2>Edit Pegawai</h2>
    <form method="POST">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?= $row['nama']; ?>" required><br>

        <label>Jabatan:</label>
        <input type="text" name="jabatan" value="<?= $row['jabatan']; ?>" required><br>

        <label>Gaji:</label>
        <input type="number" name="gaji" value="<?= $row['gaji']; ?>" required><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>

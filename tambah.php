<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $gaji = $_POST['gaji'];

    $query = "INSERT INTO pegawai (nama, jabatan, gaji) VALUES ('$nama', '$jabatan', '$gaji')";
    if ($conn->query($query)) {
        header("Location: index.php");
    } else {
        echo "Gagal menambah data!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Tambah Pegawai</title>
</head>
<body>
    <h2>Tambah Pegawai</h2>
    <form method="POST">
        <label>Nama:</label>
        <input type="text" name="nama" required><br>

        <label>Jabatan:</label>
        <input type="text" name="jabatan" required><br>

        <label>Gaji:</label>
        <input type="number" name="gaji" required><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>

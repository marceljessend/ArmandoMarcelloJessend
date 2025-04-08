<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "DELETE FROM pegawai WHERE id = $id";

if ($conn->query($query)) {
    header("Location: index.php");
} else {
    echo "Gagal menghapus data!";
}
?>

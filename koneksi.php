<?php
$host = "localhost";
$user = "root";
$pass = ""; // Biarkan kosong jika tidak ada password
$db   = "db_pegawai";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengolahan Nama Keluarga</title>
</head>
<body>

<h2>Program Pengolahan Nama Keluarga</h2>

<?php

$keluarga = ["Piad Jond", "Ika Krisnapela", "Marcell Jessend", "Talitha Margaretha", "Michael Jessend", "Hara Agustina Acna"];

echo "<h3>Daftar Nama Keluarga:</h3>";
echo "<ul>";
foreach ($keluarga as $nama) {
    echo "<li>$nama</li>";
}
echo "</ul>";
?>

<form method="post">
    <label for="nama">Pilih Nama:</label>
    <select name="nama" required>
        <?php
        foreach ($keluarga as $nama) {
            echo "<option value='$nama'>$nama</option>";
        }
        ?>
    </select>
    <button type="submit">Proses</button>
</form>

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namaDipilih = $_POST["nama"];

    $jumlahKata = str_word_count($namaDipilih);

    
    $jumlahHuruf = strlen(str_replace(" ", "", $namaDipilih));

 
    $kebalikan = strrev($namaDipilih);

    $vokal = preg_match_all('/[aeiouAEIOU]/', $namaDipilih);
    $konsonan = preg_match_all('/[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]/', $namaDipilih);

    echo "<h3>Hasil Analisis:</h3>";
    echo "<p><strong>Nama yang Dipilih:</strong> $namaDipilih</p>";
    echo "<p><strong>Jumlah Kata:</strong> $jumlahKata</p>";
    echo "<p><strong>Jumlah Huruf:</strong> $jumlahHuruf</p>";
    echo "<p><strong>Kebalikan Nama:</strong> $kebalikan</p>";
    echo "<p><strong>Jumlah Huruf Vokal:</strong> $vokal</p>";
    echo "<p><strong>Jumlah Huruf Konsonan:</strong> $konsonan</p>";
}
?>

</body>
</html>

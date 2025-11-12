<?php
//cek apakah tidak ada data di $_GET
// isset : mengecek apakah variabel sudah di bikin apa belom (sudah dibuat)
// !isset : (belom dibuat)
// ketika $_GET["nama"] belum di set, pindahkan ke latihan2.php
if (
    !isset($_GET["nama"]) ||
    !isset($_GET["alamat"]) ||
    !isset($_GET["umur"]) ||
    !isset($_GET["status"]) ||
    !isset($_GET["gambar"])
) { //ketika $_GET nama belom di set eksekusi dibawah
    // redirect : memindahkan user dari sebuah halaman ke halaman lain
    header("Location: latihan2.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>

<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["alamat"]; ?></li>
        <li><?= $_GET["umur"]; ?></li>
        <li><?= $_GET["status"]; ?></li>
    </ul>

    <a href="latihan2.php">Kembali</a>
</body>

</html>
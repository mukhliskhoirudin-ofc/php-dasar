<?php
//  variabel superglobals : (termasuk tipe array assosiative) 
// - $_GET
// - $_POST
// - $_REQUEST
// - $_SESSION
// - $_COOKIE
// - $_SERVER
// - $_ENV 
// -------------------
// $_GET : (metode pengiriman data melalui url dan data tersebut dapat diambil/ditangkap melalui variabel superglobals $_GET)
// $_GET["nama"] = "mukhlis";
// $_GET["npm"] = "22312008";

$biodata = [
    [
        "nama" => "Mukhlis",
        "alamat" => "Wiralaga 1",
        "umur" => "21",
        "status" => "pelajar",
        "gambar" => "gambar1.jpg"
    ],
    [
        "nama" => "khoirudin",
        "alamat" => "Wiralaga 2",
        "umur" => "26",
        "status" => "menikah",
        "gambar" => "gambar2.jpg"
    ],

];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <ul>
        <?php foreach ($biodata as $bio) : ?>
            <li><a href="latihan3.php?nama=<?= $bio["nama"]; ?>&alamat=<?= $bio["alamat"]; ?>&umur=<?= $bio["umur"]; ?>&status=<?= $bio["status"]; ?>&gambar=<?= $bio["gambar"]; ?>"><?= $bio["nama"]; ?></a></li>
        <?php endforeach; ?>
    </ul>

</body>

</html>
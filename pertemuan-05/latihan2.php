<?php

// array associative : bedanya cuma indexnya diganti sesuai keinginan
$biodata = [
    [
        "nama" => "Mukhlis Khoirudin",
        "alamat" => "Wiralaga 1",
        "umur" => "21",
        "status" => "pelajar",
        "gambar" => "img (1).jpg"
    ],
    [
        "nama" => "Ganteng",
        "alamat" => "Wiralaga 2",
        "umur" => "26",
        "status" => "menikah",
        "gambar" => "img (2).jpg"
    ],

];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>

<body>

    <h1>Biodata Diri</h1>

    <?php foreach ($biodata as $bio) : ?>
        <ul>
            <li> <?= $bio["nama"] ?> </li>
            <li> <?= $bio["alamat"] ?> </li>
            <li> <?= $bio["umur"] ?> </li>
            <li> <?= $bio["status"] ?> </li>
            <li> <img src="img/<?= $bio["gambar"]; ?>"> </li>
        </ul>
    <?php endforeach; ?>

</body>

</html>
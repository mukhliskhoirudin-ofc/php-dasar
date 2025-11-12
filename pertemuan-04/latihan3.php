<?php

// termasuk array numerik
$mahasiswa =
    [
        ["Mukhlis", "22312008", "Informatika", "muklis@gmail.com"],
        ["eno", "22312010", "Informatika", "eno@gmail.com"],
        ["pitri", "22312012", "Informatika", "pitri@gmail.com"],
    ];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>

    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs): ?>
        <ul>
            <li><?= $mhs[0]; ?></li>
            <li><?= $mhs[1]; ?></li>
            <li><?= $mhs[2]; ?></li>
            <li><?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>
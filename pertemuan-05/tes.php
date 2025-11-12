<?php
$mahasiswa = [
    [
        "nama" => "mukhlis khoirduii",
        "npm" => "22312008",
        "kelas" => "if22"
    ],
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php foreach ($mahasiswa as $mhs): ?>
        <?= $mhs["nama"]; ?>
        <?= $mhs["npm"]; ?>
        <?= $mhs["kelas"]; ?>
    <?php endforeach; ?>

</body>

</html>
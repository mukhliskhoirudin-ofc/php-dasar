<?php
require 'controller.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

if (isset($_POST["btnSearch"])) {
    $mahasiswa = search($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>

    <h1>Daftar Mahasiswa</h1>

    <a href="create.php">Tambah data mahasiswa</a>
    <br>
    <br>

    <form action="" method="post">
        <div>
            <input type="text" name="keyword" size="30" autofocus placeholder="Search .." autocomplete="off">
            <button type="submit" name="btnSearch">Cari</button>
        </div>
    </form>

    <br>

    <table border=" 1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><img src="img/<?= $mhs["gambar"]; ?>" width="100"></td>
                <td><?= $mhs["nrp"]; ?></td>
                <td><?= $mhs["nama"]; ?></td>
                <td><?= $mhs["email"]; ?></td>
                <td><?= $mhs["jurusan"]; ?></td>
                <td>
                    <a href="update.php?id=<?= $mhs["id"]; ?>">Update</a> |
                    <a href="delete.php?id=<?= $mhs["id"]; ?>" onclick="return confirm('Apakah anda ingin menghapusnya ?');">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>

</body>

</html>
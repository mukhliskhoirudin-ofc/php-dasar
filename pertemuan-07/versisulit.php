<?php
//koneksi ke database
//"namahost(default-localhost)", "usernamemysql-defaultroot", "password-defaulkosong","namadatabase"
//$conn untuk biar enak manggil isinya
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

//ambil data dari tabel mahasasiswa / query data mahasiswa (ngambil data apa, tabel apa, data yang mana gunakan ,mysqli1-query)
$result = mysqli_query($conn, "SELECT * FROM mahasiswa"); //parameter ke2 untuk mengambil seluru data dari tabel mahasiswa

// ambil data (fetch) mahasiswa diatas dari object result ada 4 cara
// mysqli_fetch_row() = mengembalikan array numerik
// mysqli_fetch_assoc() = mengmbalikan array assosiative
// mysqli_fetch_array() = mengmbalikan keduanya, jadi ganda (tidak disarankan)
// mysqli_fetch_object() = tidak dipakai

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

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>


        <?php $i = 1; ?> <!-- untuk perulangan nomornya -->
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">ubah</a> |
                    <a href="">hapus</a>
                </td>
                <td><img src="img/<?= $row["gambar"]; ?>" width="50px"></td>
                <td><?= $row["nrp"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
            </tr>
            <?php $i++ ?>
        <?php endwhile; ?>

    </table>

</body>

</html>
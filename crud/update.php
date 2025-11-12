<?php

require 'controller.php';

$id = $_GET["id"];

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


if (isset($_POST["btnUpdate"])) {
    if (update($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil diubah');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diubah');
                document.location.href = 'index.php';
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update data mahasiswa</title>
</head>

<body>

    <h1>Update data mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <div>
                <input type="hidden" name="id" id="id" value="<?= $mhs["id"]; ?>">
                <input type="hidden" name="gambarLama" id="id" value="<?= $mhs["gambar"]; ?>">
            </div>
            <div>
                <label for="nrp">NRP :</label>
                <input type="text" name="nrp" id="nrp" value="<?= $mhs["nrp"]; ?>">
            </div>
            <div>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" value="<?= $mhs["nama"]; ?>">
            </div>
            <div>
                <label for="email">email :</label>
                <input type="text" name="email" id="email" value="<?= $mhs["email"]; ?>">
            </div>
            <div>
                <label for="jurusan">jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]; ?>">
            </div>
            <div>
                <label for="gambar">gambar :</label><br>
                <img src="img/<?= $mhs['gambar'] ?>" alt="" width="100"><br>
                <input type="file" name="gambar" id="gambar" value="<?= $mhs["gambar"]; ?>">
            </div>
            <br>
            <div>
                <button type="submit" name="btnUpdate">Update</button>
            </div>
        </ul>
    </form>

</body>

</html>
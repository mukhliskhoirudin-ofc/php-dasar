<?php

require 'controller.php';

if (isset($_POST["btnSubmit"])) {

    if (create($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan');
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
    <title>Tambah data mahasiswa</title>
</head>

<body>

    <h1>Tambah data mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <div>
                <label for="nrp">NRP :</label>
                <input type="number" name="nrp" id="nrp">
            </div>
            <div>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama">
            </div>
            <div>
                <label for="email">email :</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="jurusan">jurusan :</label>
                <input type="text" name="jurusan" id="jurusan">
            </div>
            <div>
                <label for="gambar">gambar :</label>
                <input type="file" name="gambar" id="gambar">
            </div>
            <br>
            <div>
                <button type="submit" name="btnSubmit">Tambah Data</button>
            </div>
        </ul>
    </form>

</body>

</html>
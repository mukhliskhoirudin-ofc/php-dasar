<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>


<?php if (isset($_POST["submit"])): ?>
    <h1>Selamat datang, <?= $_POST["nama"]; ?></h1>
<?php endif; ?>


<body>

    <form action="" method="post">
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" autocomplete="off">
        <br><br>
        <button type="submit" name="submit">Kirim</button>
    </form>

</body>

</html>
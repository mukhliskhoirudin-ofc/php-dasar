<?php
// apakah tombol submit udah ditekan atau belum, (ditekan) jalankan perinta bawah
if (isset($_POST["submit"])) {

    // cek username dan password
    if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
        //jika benar, redirect ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
        //jika salah, tampilkan pesan kesalahan
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <h1>Login Admin</h1>

    <!-- untuk memunculkan pesan error -->
    <?php if (isset($error)) : ?>
        <p style="font-style: italic;color:red">username / password tidak sesuai</p>
    <?php endif ?>

    <ul>
        <form action="" method="post">
            <li>
                <label for="username">username :
                    <input type="text" name="username" id="username">
                </label>
            </li>
            <br>
            <li>
                <label for="password">password :
                    <input type="password" name="password" id="password">
                </label>
            </li>
            <br>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>
        </form>
    </ul>


</body>

</html>
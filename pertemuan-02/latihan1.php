<?php

// pengulangan/perulangan :
// - for
// - while
// - do .. while
// - foreach ( khusus untuk array )

// pengkondisian/percabangan :
// - if else
// - if .. else if .. else
// - ternary ( untuk menggantikan sintak if else sederhana )
// - switch

// perulangan ada 3 bagian :
// 1. inisialisasi : menentukan variabel awal untuk pengulangannya
// 2. kondisi terminasi : memberhentikan pengulangannya
// 3. increment/decrement : supaya pengulannya bisa maju atau muncur

// contoh sintak for
for ($i = 0; $i < 5; $i++) {
    echo "Hello World! <br> ";
}

// contoh sintak while : ( ngecek dulu, kalo salah tidak dijalankan )
$i = 0;
while ($i < 5) {
    echo "Hello Worild! <br>";
    $i++;
}

//contoh sintak do..while : ( langsung dijalanin dulu 1x, walaupun salah )
$i = 10;

do {
    echo "Hello World! <br>";
    $i++;
} while ($i < 5);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warna-baris {
            background-color: orange;
        }
    </style>
</head>

<body>

    <table border="1" cellpadding="10" cellspacing="0">

        <?php
        // for ($i = 1; $i <= 3; $i++) {
        //     echo "<tr>";
        //     for ($j = 1; $j <= 5; $j++) {
        //         echo "<td> $i.$j </td>";
        //     }
        //     echo "</tr>";
        // }
        ?>

        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <?php if ($i % 2 == 1) : ?>
                <tr class="warna-baris">
                <?php else : ?>
                <?php endif; ?>
                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <td> <?= "$i, $j"; ?> </td>
                <?php endfor; ?>
                </tr>
            <?php endfor; ?>
    </table>

</body>

</html>
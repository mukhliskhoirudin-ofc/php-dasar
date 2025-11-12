<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>

    <?php
    // cara menampilkan array menggunakan lopping :
    // foreach  <-- perulangan khusus array

    // data arraynya :
    $angka = [10, 30, 70, 90, 20, 30, 40, 50, 60, 70, 80];

    ?>

    <!-- cara perulangan array pertama menggunakan for: -->
    <!-- gunakan fungsi count($namarray) : nanti nambah sendiri -->
    <?php for ($i = 0; $i < count($angka); $i++) { ?>
        <div class="kotak"> <?php echo $angka[$i] ?> </div>
    <?php } ?>

    <div class="clear"></div>

    <!-- cara perulangan array kedua menggunakan foreach : -->
    <!-- foreach : untuk setiap elemen yg ada dalam array lakukan sesuatu -->
    <!-- foreach($angka as .. ) : as untuk menyimpan menjadi nama variabel/namabaru, karna namabaru itu yang akan dipanggil saat loop-->

    <!-- cara menyederhanan foreach diatas -->
    <!-- : = untuk pengganti pembuka { dari output for -->
    <!-- untuk pengganti penutup }, bungkus php lalu dalamnya endforeach / -->
    <!-- untuk mengganti sintak php dengan =, catatan : jangan menggunakan echo -->
    <!-- kalau mau panggil semua $a, / kalau banyak data gunakan $a[index/key] -->
    <?php foreach ($angka as $ang) : ?>
        <div class="kotak"> <?= $ang; ?> </div>
    <?php endforeach ?>

</body>

</html>
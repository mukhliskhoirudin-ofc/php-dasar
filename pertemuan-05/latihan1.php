<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: #BADA55;
            text-align: center;
            line-height: 30px;
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

    $angka = [
        [1, 1, 1],
        [2, 2, 2],
        [3, 3, 3]
    ];

    ?>

    <!-- kalo arraynya banyak sarang, gunakan foreach lagi -->

    <?php foreach ($angka as $ang): ?>
        <?php foreach ($ang as $a): ?>
            <div class="kotak"><?= $a ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>

    <br>
    <!-- atau -->
    <?php foreach ($angka as $an): ?>
        <div class="kotak"><?= $an[0]; ?></div>
        <div class="kotak"><?= $an[1]; ?></div>
        <div class="kotak"><?= $an[2]; ?></div>
        <div class="clear"></div>
    <?php endforeach; ?>

</body>

</html>
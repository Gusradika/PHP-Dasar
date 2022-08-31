<?php
$angka = [15, 10, 2, 20, 25, 21, 30, 45];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Angka Array</title>
    <style>
    body {
        font-family: arial, helvetica, sans-serif;
        margin: 0;
        padding: 0;
    }

    .box-angka {
        width: 100px;
        height: 100px;
        background-color: salmon;
        color: white;
        font-weight: bold;
        font-size: 40px;
        text-align: center;
        line-height: 100px;
        float: left;
        margin: 15px;
    }

    .clear {
        clear: both;
    }

    .box-angka2,
    .box-angka3 {
        width: 100px;
        height: 100px;
        background-color: yellowgreen;
        color: white;
        font-weight: bold;
        font-size: 40px;
        text-align: center;
        line-height: 100px;
        float: left;
        margin: 15px;
    }

    div.box-angka3 {
        background-color: skyblue;
    }
    </style>
</head>

<body>
    <!-- For biasa -->
    <?php for ($i = 0; $i < count($angka); $i++) { ?>
    <div class="box-angka"><?php echo "$angka[$i]" ?></div>
    <?php } ?>
    <div class="clear"></div>
    <br>
    <p><?php echo " isi dari array : " . count($angka) ?></p>
    <p><?php echo var_dump($angka) ?></p>


    <!-- For Each -->
    <?php foreach ($angka as $a) { ?>
    <div class="box-angka2"><?php echo $a ?></div>
    <?php } ?>
    <div class="clear"></div>

    <!-- For each endforeach -->
    <?php foreach ($angka as $a) : ?>
    <div class="box-angka3"><?php echo $a ?></div>
    <?php endforeach; ?>
</body>

</html>
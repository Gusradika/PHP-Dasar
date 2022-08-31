<?php
$angka = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];

// Array Associative 
//definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
// Kelebihan :
/*
    array associative tidak memperdulikan urutan. 
    dengan cara panggil saja associativenya.
    dan bukan index address nya
*/
$mhs = [
    [
        "nama" => "Aditya Kesuma",
        "nim" => "21410100039",
        "email" => "aditya@gmail.com",
        "jurusan" => "S1 Sistem Informasi",
        "tugas" => [90, 80, 100],
        "gambar" => "gambar1.png"
    ],
    [
        "nama" => "Asihiap",
        "nim" => "21sdsd410100039",
        "email" => "sd@gmail.com",
        "jurusan" => "S1 sdds Informasi",
        "tugas" => [902, 802, 1020],
        "gambar" => "gambar2.png"
    ],
    [
        "nama" => "sddsd Kesuma",
        "nim" => "21410sdsd100039",
        "email" => "aditysdssdda@gmail.com",
        "jurusan" => "S1 Sistsdsem Informasi",
        "tugas" => [903, 803, 1003],
        "gambar" => "gambar3.png"
    ]
]


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array Associative</title>
    <style>
    body {
        margin: 0;
        padding: 0;
        font-family: arial, sans-serif;
        box-sizing: border-box;
    }

    .container {
        margin: 0 auto;
        width: 800px;
        background-color: #eee;
    }

    .boxarray {
        /* display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        align-content: flex-start;
        flex: 1; */
        border: 1px red;
        width: 330px;
        margin: 0 auto;
    }

    .box {
        float: left;
        width: 100px;
        height: 100px;
        background-color: salmon;
        color: white;
        font-weight: bold;
        margin: 5px;
        text-align: center;
        line-height: 100px;
        transition: 0.5s;
    }

    .box:hover {
        background-color: lightblue;
        transform: scale(1.2) rotate(180deg);
        border-radius: 50%;
    }

    .clear {
        clear: both;
    }
    </style>
</head>

<body>
    <h1>Latihan Array Associative</h1>
    <!-- Array Associative -->
    <div class="ashiap">
        <?php for ($i = 0; $i < count($mhs); $i++) { ?>
        <img src="../resource/<?php echo $mhs[$i]["gambar"] ?>">
        <p><?php echo $mhs[$i]["nama"] ?></p>
        <?php } ?>

        <!-- Array Associative di dalamnya ada array -->
        <?php for ($i = 0; $i < count($mhs); $i++) { ?>
        <p> <?php echo $mhs[$i]["tugas"][1] ?></p>
        <?php } ?>
    </div>

    <!-- Array biasa -->
    <div class="container">
        <div class="boxarray">
            <?php foreach ($angka as $x) : ?>
            <?php foreach ($x as $y) : ?>
            <div class="box">
                <?php echo $y ?>
            </div>
            <?php endforeach; ?>
            <div class="clear"></div>
            <?php endforeach ?>
        </div>
    </div>
</body>

</html>
<?php

//Global Variabel

$x = 10;

function printX()
{
    global $x;
    echo $x;
}

$mhs = [
    [
        "nama" => "Aditya Kesuma",
        "nim" => "2000",
        "jurusan" => "S1 SI",
        "bulan" => "September",
        "tugas" => [80, 10, 20],
        "gambar" => "gambar1.png",
    ],
    [
        "nama" => "Anggara Raya",
        "nim" => "2001",
        "jurusan" => "S1 SI",
        "bulan" => "Agustus",
        "tugas" => [81, 11, 21],
        "gambar" => "gambar2.png",
    ],
    [
        "nama" => "Albania",
        "nim" => "2002",
        "jurusan" => "S1 SI",
        "bulan" => "September",
        "tugas" => [82, 12, 22],
        "gambar" => "gambar3.png",
    ],
];

//SuperGlobals

/* semua ditulis dengan huruf besar. dan semuanya memiliki tipe array Associative

$_GET   * GET diperuntukan untuk mengambil data dari database/array
$_POST  * POST diperuntukan untuk mengambil data dari form
$_REQUEST
$_SESSION   *
$_COOKIE    *
$_SERVER
$_ENV
*/

// $_GET => cara ngisi di url tambahkan "?variable = value"
// misal .php?nama=Aditya Kesuma
// jika ingin mengirim yang lainnya
// ikuti dengan &variablekey=value 
// jadi : 
// .php?nama=Aditya Kesuma&nim=21410100039
// $_GET["nama"] = "Aditya Kesuma";
var_dump($_GET);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 7</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Daftar MHS</h1>
    <?php for ($i = 0; $i < count($mhs); $i++) : ?>
    <ul>
        <li><img src="../resource/<?= $mhs[$i]["gambar"] ?>"></li>
        <li>
            <a href="latihan2.php?nama=<?= $mhs[$i]["nama"] ?>
            &nim=<?= $mhs[$i]["nim"] ?>
            &gambar=<?= $mhs[$i]["gambar"] ?>
            &jurusan=<?= $mhs[$i]["jurusan"] ?>
            &bulan=<?= $mhs[$i]["bulan"] ?>
            ">
                <?= $mhs[$i]["nama"] ?></a>
        </li>
        <li><?= $mhs[$i]["nim"] ?></li>
        <li><?= $mhs[$i]["jurusan"] ?></li>
        <li><?= $mhs[$i]["bulan"] ?></li>
        <li>
            <?php for ($j = 0; $j < count($mhs[$i]["tugas"]); $j++) : ?>
            <?php echo $mhs[$i]["tugas"][$j] . ", " ?>
            <?php endfor; ?>
        </li>
    </ul>
    <?php endfor; ?>
</body>

</html>
<?php
// cek apakah tidak ada data di $_GET
// web security.
// jika tidak ada maka akna di redirect ke location:index.php
if (
    !isset($_GET["nama"]) || !isset($_GET["nim"])
    || !isset($_GET["gambar"]) || !isset($_GET["jurusan"])
    || !isset($_GET["bulan"])
) {
    //redirect
    header("Location:index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 2 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Data Mahasiswa</h1>
    <ul>
        <li><img src="../resource/<?= $_GET["gambar"] ?>"></li>
        <li><?= $_GET["nama"] ?></li>
        <li><?= $_GET["nim"] ?></li>
        <li><?= $_GET["jurusan"] ?></li>
        <li><?= $_GET["bulan"] ?></li>
    </ul>
    <br>
    <h2><a href="index.php">Kembali Ke Menu Awal</a></h2>
</body>

</html>
<?php
require "functions.php";

$conn = query("SELECT * FROM mahasiswa");

foreach ($conn as $y) {
    var_dump($y["id"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Insert & Delete</title>
    <style>
    img {
        width: 50px;
    }
    </style>
</head>

<body>

    <h1>Data Mahasiswa</h1>

    <a href="tambah.php">Tambah data Mahasiswa</a>
    <br>
    <br>
    <table class="tabelmhs" cellspacing="0" cellpadding="20" border="1">
        <tr>
            <th>ID</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php foreach ($conn as $x) : ?>
        <tr>
            <td><?= $x["id"] ?></td>
            <td>
                <a href="">Ubah</a>
                <a href="hapus.php?id=<?= $x["id"] ?>">Hapus</a> <!-- kirim dulu melalui GET -->
            </td>
            <td><img src="../resource/<?= $x["gambar"] ?>"></td>
            <td><?= $x["nim"] ?></td>
            <td><?= $x["nama"] ?></td>
            <td><?= $x["email"] ?></td>
            <td><?= $x["jurusan"] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>
<?php

require "functions.php";

$mhs = query("SELECT * FROM mahasiswa");


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>

<body>
    <h1>Data Mahasiswa</h1>
    <a href="tambah.php">Tambah Data Mhs</a>
    <table cellspacing="0" cellpadding="20" border="1">
        <tr>
            <th>ID</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php foreach ($mhs as $x) : ?>
        <tr>
            <td><?= $x["id"] ?></td>
            <td><a href="ubah.php?id=<?= $x["id"] ?>">ubah</a> <a href="hapus.php?id=<?= $x["id"] ?>">hapus</a>
            <td><img style="width:50px" src="../resource/<?= $x["gambar"] ?>"></td>
            <td><?= $x["nama"] ?></td>
            <td><?= $x["nim"] ?></td>
            <td><?= $x["email"] ?></td>
            <td><?= $x["jurusan"] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>
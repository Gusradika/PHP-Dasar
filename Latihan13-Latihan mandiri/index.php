<?php

require("functions.php");

$query = "SELECT * FROM mahasiswa";

$data = query($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan DataBase 3</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Data Mahasiswa</h1>
    <a href="tambah.php">
        <h3>Tambah Data Mahasiswa</h3>
    </a>
    <table cellspacing="0" cellpadding="20" border="1">
        <tr>
            <th>id</th>
            <th>Aksi</th>
            <th>gambar</th>
            <th>nama</th>
            <th>email</th>
            <th>jurusan</th>
            <th>alamat</th>
        </tr>
        <?php foreach ($data as $mhs) : ?>
            <tr>
                <td><?= $mhs['id'] ?></td>
                <td><a href="hapus.php?id=<?= $mhs['id'] ?>">hapus</a> <a href="ubah.php?id=<?= $mhs['id'] ?>">ubah</a></td>
                <td><img style="width: 50px;" src="../resource/<?= $mhs['gambar'] ?>"></td>
                <td><?= $mhs['nama'] ?></td>
                <td><?= $mhs['email'] ?></td>
                <td><?= $mhs['jurusan'] ?></td>
                <td><?= $mhs['alamat'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>
<?php
<<<<<<< HEAD

require("functions.php");
$query = "SELECT * FROM mahasiswa";

$data = query($query);

if (isset($_POST['cari'])) {
    $data = cari($_POST['keyword']);
}



=======
require "functions.php";

$mhs = query("SELECT * FROM mahasiswa");

if (isset($_POST['submit'])) {
    echo "
    <script>
    console.log('log1');
    </script>
    ";
    $mhs = cari($_POST['cari']);
}
>>>>>>> d40d18cc6015806e3a77d71c72d3557ee8e751c5
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Latihan DataBase 3</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Data Mahasiswa</h1>
    <form action="" method="POST">
        <input type="text" name="keyword" id="" placeholder="Pencarian..." size="30" autofocus>
        <button type="submit" name="cari">cari</button>
    </form>


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
=======
    <title>Latihan Mandiri</title>
    <link rel="stylesheet" href="style.css">
    <style>

    </style>
</head>

<body>
    <div class="container">
        <h1>Data Mahasiswa</h1>
        <form action="" method="post">
            <div class="boxcari">
                <label for="cari">Cari </label>
                <input type="text" name="cari" id="cari" placeholder="Cari data mahasiswa...">
                <button type="submit" name="submit">Cari</button>
            </div>
        </form>
        <div class="tabelbox">
            <table cellspacing="0" cellpadding="20" border="1">
                <tr>
                    <th>id</th>
                    <th>Aksi</th>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Nim</th>
                    <th>Email</th>
                    <th>Jurusan</th>
                </tr>
                <?php foreach ($mhs as $data) : ?>
                <tr>
                    <td><?= $data['id'] ?></td>
                    <td><a href="ubah.php?id=<?= $data['id'] ?>">Ubah</a><br><a
                            href="hapus.php?id=<?= $data['id'] ?>">hapus</a></td>
                    <td><img style="width:50px ;" src="../resource/<?= $data['gambar'] ?>"></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['nim'] ?></td>
                    <td><?= $data['email'] ?></td>
                    <td><?= $data['jurusan'] ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <div class="btn-tmbhdata">
            <h2><a href="tambah.php">Tambah Data</a></h2>
        </div>
    </div>
>>>>>>> d40d18cc6015806e3a77d71c72d3557ee8e751c5
</body>

</html>
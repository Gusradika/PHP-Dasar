<?php
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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <div>
                <button><a href="register.php">Register</a></button>
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
</body>

</html>
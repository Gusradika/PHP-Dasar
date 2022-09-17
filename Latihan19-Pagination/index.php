<?php

// cek user login atau belum

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require "functions.php";

// Pagination
// konfigurasi

$jumlahDataPerHalaman = 3;
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
$jumlahData = mysqli_num_rows($result);
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);

if (isset($_GET["page"])) {
    $halamanAktif = $_GET["page"];
} else {
    $halamanAktif = 1;
}
// Formula Pagination
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

// ----------------------------------------


$mhs = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");

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
                <label for="cari">Cari : </label>
                <input type="text" name="cari" id="cari" placeholder="Cari data mahasiswa...">
                <button type="submit" name="submit">Cari</button>
            </div>
            <div class="boxcari">
                <button><a href="register.php">Register</a></button>
                <button><a href="logout.php">Logout</a></button>
            </div>
        </form>

        <!-- Navigasi -->
        <?php if ($halamanAktif > 1) : ?>
        <a href="?page=<?= $halamanAktif - 1 ?>">&laquo;</a>
        <?php endif; ?>


        <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
        <a href="?page=<?= $i ?>"><?= $i ?></a>
        <?php endfor; ?>

        <?php if ($halamanAktif < $jumlahHalaman) : ?>
        <a href="?page=<?= $halamanAktif + 1 ?>">&raquo;</a>
        <?php endif; ?>

        <!-- ######################## -->

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
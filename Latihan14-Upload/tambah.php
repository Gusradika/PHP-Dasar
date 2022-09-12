<?php
require "functions.php";

if (isset($_POST['submit'])) {

    // var_dump($_POST);
    // var_dump($_FILES);
    // die;


    if (tambah($_POST) > 0) {
        echo "
    <script>
    alert('Data Added');
    document.location.href='index.php';
    </script>
    ";
    } else {
        echo "
    <script>
    alert('Not Found');
    document.location.href='index.php';
    </script>;
    ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <!-- Nama -->
        <br>
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama" placeholder="Masukan nama anda" required>
        <!-- Email -->
        <br>
        <label for="email">Email : </label>
        <input type="text" name="email" id="email" placeholder="Masukan email anda" required>
        <!-- jurusan -->
        <br>
        <label for="jurusan">Jurusan : </label>
        <input type="text" name="jurusan" id="jurusan" placeholder="Masukan jurusan anda" required>
        <!-- alamat -->
        <br>
        <label for="alamat">Alamat : </label>
        <input type="text" name="alamat" id="alamat" placeholder="Masukan alamat anda" required>
        <!-- Gambar -->
        <br>
        <label for="gambar">Gambar : </label>
        <input type="file" name="gambar" id="gambar" placeholder="gambar.png/jpg">
        <!-- Button -->
        <br>
        <button type="submit" name="submit">Tambah</button>

    </form>
</body>

</html>
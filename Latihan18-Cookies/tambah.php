<?php
// cek user login atau belum

session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

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
    <title>Tambah Data</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
    <h1>Menambahkan Data</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nama">nama :</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="nim">nim :</label>
                <input type="text" name="nim" id="nim" required>
            </li>
            <li>
                <label for="email">email :</label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah</button>
            </li>
        </ul>
    </form>
</body>

</html>
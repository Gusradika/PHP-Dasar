<?php

require "functions.php";

$id = $_GET['id'];

$query = "SELECT * FROM mahasiswa WHERE id = $id";
$data = query($query)[0];

if (isset($_POST['submit'])) {
    if (ubah($_POST) > 0) {
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
    <title>Ubah Data</title>
    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }
    </style>
</head>

<body>
    <h1>Menambahkan Data</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <input type="hidden" name="gambarLama" value="<?= $data['gambar'] ?>"> // kirim melalui hidden jika user tidak
        ingin merubah gambar
        <ul>
            <li>
                <label for="nama">nama :</label>
                <input type="text" name="nama" id="nama" value="<?= $data['nama'] ?>" required>
            </li>
            <li>
                <label for="nim">nim :</label>
                <input type="text" name="nim" id="nim" value="<?= $data['nim'] ?>" required>
            </li>
            <li>
                <label for="email">email :</label>
                <input type="text" name="email" value="<?= $data['email'] ?>" id="email">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" value="<?= $data['email'] ?>" id="jurusan" required>
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <img src="../resource/<?= $data['gambar'] ?>" width="50px"><br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah</button>
            </li>
        </ul>
    </form>
</body>

</html>
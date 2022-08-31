<?php
require "functions.php";


// cek sumbited
// && isset($_POST["nrp"]) && isset($_POST["email"]) && isset($_POST["jurusan"]) && isset($_POST["gambar"])
if (isset($_POST["submit"])) {
    // // ambil data ke tiap form
    // $nim = $_POST["nim"];
    // $nama = $_POST["nama"];
    // $email = $_POST["email"];
    // $jurusan = $_POST["jurusan"];
    // $gambar = $_POST["gambar"];

    // // query insert data
    // $query = "INSERT INTO mahasiswa
    //             VALUES('','$nama','$nim','$email','$jurusan','$gambar')";
    // mysqli_query($conn, $query);


    // CEK query (ADMIN)
    // -1 = error
    // 1 = success // 1 baris yang berubah
    // var_dump(mysqli_affected_rows($conn));

    // CEK query (General)
    // if (mysqli_affected_rows($conn) > 0) {
    //     echo "berhasil";
    // } else {
    //     echo "gagal!<br>";
    //     echo mysqli_error($conn);
    // }

    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil ditambahkan');
                document.location.href='index.php';
                </script>
                ";
    } else {
        echo "
                <script>
                alert('Data Gagal Ditambahkan');
                document.location.href='index.php';
            </script>
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
    <title>Tambah Data Mahasiswa</title>
</head>

<body>

    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="POST">
        <ul>
            <li>
                <label for="nim">NIM : </label>
                <input type="text" name="nim" id="nim" required>
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" required>
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">Kirim</button>
            </li>
        </ul>
    </form>
</body>

</html>
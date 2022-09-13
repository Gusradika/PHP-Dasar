<?php



function query()
{
    global $namatable;
    //5 data
    $name = ["Aditya Kesuma", "Joni Wijaya", "Martinez Martin", "Robi Selamat", "Emanuel Makimun"];
    $nim = ["21410100039", "21410100033", "21410100032", "214101000055", "21410100099"];
    $email = ["aditya@gmail.com", "ashiap@gmail.com", "mantapku@gmail.com", "monsterkucing@gmail.com", "kucingbangsat@gmail.com"];
    $jurusan = ["S1 Sistem Informasi", "S1 Sistem Informasi", "S1 Teknik Komputer", "S1 Teknik Komputer", "S1 Sistem Informasi"];
    $gambar = "study.png";

    $conn = mysqli_connect('localhost', 'root', '', $namatable);

    for ($i = 0; $i < 5; $i++) {
        $query = "INSERT INTO mahasiswa VALUES('','$name[$i]','$nim[$i]','$email[$i]','$jurusan[$i]','$gambar')";
        mysqli_query($conn, $query);
    }

    return (mysqli_affected_rows($conn));
}

function query2()
{
    global $namatable;
    //5 data berbeda
    $nama = ["Ricky Aselole", "Dr.Aji", "Boyke Ashiap", "Dar der dor", "Kurang Kreatif"];
    $nim = ["214101", "20001", "20002", "20003", "20004"];
    $email = ["ricky@gmail.com", "aji@gmail.com", "boyke@gmail.com", "dar@gmail.com", "kurang@gmail.com"];
    $jurusan = ["S1 Sistem Informasi", "S1 Sistem Informasi", "S1 Sistem Informasi", "S1 Sistem Informasi", "S1 Sistem Informasi"];
    $gambar = "puzzle.png";

    $conn = mysqli_connect('localhost', 'root', '', $namatable);

    for ($i = 0; $i < 5; $i++) {
        $query = "INSERT INTO mahasiswa VALUES('','$nama[$i]','$nim[$i]','$email[$i]','$jurusan[$i]','$gambar')";
        mysqli_query($conn, $query);
    }
    return (mysqli_affected_rows($conn));
}

if (isset($_POST['submit'])) {
    $namatable = $_POST['tablename'];
    if ($num = query() > 0) {
        $print = true;
    }
}

if (isset($_POST['submit2'])) {
    $namatable = $_POST['tablename'];
    if ($num = query2() > 0) {
        $print = true;
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controler HTML</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    <?php
    if (isset($print)) {
        echo "
        <script>
            alert($num);
        </script>";
    }
    ?>
    <h1>Control Database</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="name">Table name</label>
                <input type="text" name="tablename" id="name" placeholder="Table name">
            </li>
            <li>
                <button type="submit" name="submit">Tambah data 1</button>
            </li>
            <li>
                <button type="submit" name="submit2">Tambah data 2</button>
            </li>
        </ul>
    </form>
</body>

</html>
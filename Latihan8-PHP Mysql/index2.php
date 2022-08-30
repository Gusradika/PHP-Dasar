<?php
// Koneksi ke database
// param : host, nama, password, database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// Ambil data mahasiswa dari tabel mahasiswa
// querying param : variable connect, query.
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// var_dump($result);

if (!$result) {
    echo mysqli_error($conn);
}

// ambil data mhs dari object result (fetch)
// ada 4 cara
// mysqli_fetch_row();  // Mengembalikan array numeric
// mysqli_fetch_assoc();    // mengembailkan associative array (rekomended)
// mysqli_fetch_array(); // menbembalikan array numeric & associative array. (data yang disajikan adalah double)
// mysqli_fetch_object(); // tidak dipakai

// while ($mhs = mysqli_fetch_assoc($result)) {
//     var_dump($mhs);
// }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<style>
img {
    width: 50px;
}
</style>

<body>

    <h1>Daftar Mahasiswa</h1>

    <table class="table" border="1" cellspacing="0" cellpadding="10">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $row["id"] ?></td>
            <td>
                <a href="">ubah</a>
                <a href="">hapus</a>
            </td>
            <td><img src="../resource/<?= $row["gambar"] ?>"></td>
            <td><?= $row["nim"] ?></td>
            <td><?= $row["nama"] ?></td>
            <td><?= $row["email"] ?></td>
            <td><?= $row["jurusan"] ?></td>
        </tr>
        <?php endwhile; ?>

    </table>
</body>

</html>
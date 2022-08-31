<?php

require "functions.php";

$karyawan = query("SELECT * FROM karyawan");

foreach ($karyawan as $x) {
    var_dump($x["nama"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Latihan</title>
</head>

<body>

    <?php if (isset($false) == 1) : ?>
    <h1>DATA TIDAK DITEMUKAN</h1>
    <?php endif; ?>

    <table cellspacing="0" cellpadding="20" border="1">
        <tr>
            <th>no</th>
            <th>nama</th>
            <th>id</th>
            <th>divisi</th>
        </tr>

        <?php foreach ($karyawan as $kar) : ?>
        <tr>
            <td><?= $kar["no"] ?></td>
            <td><a href="profilpage.php?
                no=<?= $kar["no"] ?>
                &id=<?= $kar["id"] ?>
                &divisi=<?= $kar["divisi"] ?>
                &nama=<?= $kar["nama"] ?>
                ">
                    <?= $kar["nama"] ?>
                </a>
            </td>
            <td><?= $kar["id"] ?></td>
            <td><?= $kar["divisi"] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>
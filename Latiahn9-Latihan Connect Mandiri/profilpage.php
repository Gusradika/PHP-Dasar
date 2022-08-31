<?php
if (!isset($_GET["no"]) || !isset($_GET["nama"]) || !isset($_GET["no"]) || !isset($_GET["divisi"])) {
    header("location:index.php?false=1");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Data karyawan</h1>
    <table cellspacing="0" cellpadding="20" border="1">
        <tr>
            <th>No :</th>
            <td><?= $_GET["no"] ?></td>
        </tr>
        <tr>
            <th>Nama :</th>
            <td><?= $_GET["nama"] ?></td>
        </tr>
        <tr>
            <th>ID :</th>
            <td><?= $_GET["id"] ?></td>
        </tr>
        <tr>
            <th>Divisi :</th>
            <td><?= $_GET["divisi"] ?></td>
        </tr>

    </table>
    <a href="index.php">Go Back</a>
</body>

</html>
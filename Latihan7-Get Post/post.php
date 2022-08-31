<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php if (isset($_POST["submit"])) : ?>
    <h1>Halo selamat datang <?= $_POST["nama"] ?></h1>
    <?php endif; ?>

    <!-- Method bisa post/get -->
    <!-- Jika tidak ada action maka akan mengirim ke halaman ini sendiri -->
    <!-- jika tidak ada method Default = "get" -->
    <!-- jangan lupa! name="var" berfungsi sebagai variabel! untuk method POST-->
    <form action="" method="post">
        Masukan nama :
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>

</body>

</html>
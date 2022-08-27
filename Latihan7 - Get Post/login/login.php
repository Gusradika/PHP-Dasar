<?php
if (isset($_POST["submit"])) {
    if ($_POST["username"] != "aditya" || $_POST["password"] != "123") {
        $salah = true;
        header("location:login.php?salah=" . $salah);
        exit;
    } else {
        $salah = false;
        header("location:admin.php");
        exit;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="../style.css">
</head>


<body>
    <?php if (isset($_POST["salah"])) {
        echo "<h1 style='color = salmon'>Username dan Password Salah!</h1>";
    } else {
    } ?>
    <ul>
        <form action="" method="post">
            <li>
                <!-- cara menghubungkan menggunakan for dan connect ke id -->
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit">Kirim!</button>
            </li>
        </form>
    </ul>
</body>

</html>
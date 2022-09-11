<?php
session_start();

if (isset($_SESSION["login"])) {
    header("Location: index.php");
}

require "functions.php";

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    //query username
    $query = "SELECT * FROM userdatabase where username = '$username'";
    $result = mysqli_query($conn, $query);

    //cek username
    if (mysqli_num_rows($result) == 1) {
        // cek password

        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {

            // set session untuk preventasi seseorang masuk tanpa login.
            $_SESSION["login"] = true;

            header("Location: index.php");
            exit;
        } else {
            $loginError = true;
        }
    } else {
        $loginError = true;
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
</head>

<body>
    <h1>Halaman Login</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username" placeholder="Username" required>
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password" placeholder="Password" required>
            </li>
            <li>
                <button type="submit" name="login">login</button>
            </li>
        </ul>
        <?php
        if (isset($loginError)) {
            echo "<p style='color : red;'>Username dan password salah!</p>";
        }
        ?>
    </form>

</body>

</html>
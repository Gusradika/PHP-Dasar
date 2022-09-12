<?php
// cek user login atau belum
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$id = $_GET['id'];

require "functions.php";


if (hapus($id) > 0) {
    echo "
    <script>
    alert('Data Deleted');
    document.location.href='index.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert('Data Not Found');
    document.location.href='index.php';
    </script>;
    ";
}
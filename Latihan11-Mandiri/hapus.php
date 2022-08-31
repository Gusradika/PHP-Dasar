<?php
require "functions.php";

$x = $_GET["id"];

if (hapus($x) > 0) {
    echo "
        <script>
        alert('Data Berhasil di Hapus');
        document.location.href='index.php';
        </script>
    ";
} else {
    echo "
        <script>
        alert('Data Berhasil di Hapus');
        document.location.href='index.php';
        </script>
    ";
}
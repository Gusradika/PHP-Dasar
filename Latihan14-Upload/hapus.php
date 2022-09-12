<?php

<<<<<<< HEAD
require "functions.php";

$id = $_GET['id'];

if (hapus($id) > 0) {
    echo "
        <script>
            alert('Data Berhasil Di hapus');
            document.location.href = 'index.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data gagal di hapus');
            document.location.href = 'index.php';
        </script>
    ";
}
=======
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
>>>>>>> d40d18cc6015806e3a77d71c72d3557ee8e751c5

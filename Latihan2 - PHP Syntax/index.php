<?php
// ini adalah Komentar
// ini juga komentar
/* Multiple Comment
    Lines
*/

// Standart Output
// echo, print
// print_r (menampilkan Array) // hanya untuk debugging
// var_dump (menampilkan isi dari variable) // hanya untuk debugging

####
// echo "ini adalah echo";
// print "ini adalah print";
// print_r("ini adalah print_r");
// var_dump("ini adalah print_r");


####
// echo true;  // mengembalikan nilai 1
// echo false; // mengembalikan nilai 0

/*  Penulisan sintaks PHP
1. PHP di dalam HTML
2. HTML di dalam PHP
*/

// Varables dan Tipe Data
//Variabel
$nama = "Aditya kesuma"; // Jangan Lupa Echo untuk output. tidak bisa langsung

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Syntax Dasar</title>
    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    h1 {
        font-size: 18px;
        margin-bottom: -10px;
    }

    span {
        background-color: yellow;
    }
    </style>
</head>

<body>
    <ol>
        <li>
            <!-- Ini adalah PHP didalam HTML -->
            <h1>Halo, Selamat Datang <?php echo "Aditya Kesuma"; ?> </h1>
            <p>PHP didalam HTML</p>
        </li>
        <li>
            <!-- Ini adalah HTML di dalam PHP -->
            <?php
            echo "<h1>Halo, Selamat Datang ";
            echo "Aditya Kesuma</h1>
            <p>(HTML di dalam PHP)</p>";
            ?>
        </li>
        <li>
            <!-- Ini adalah HTML di dalam PHP (Versi singkat) -->
            <?php
            echo "<h1>Halo, Selamat Datang Aditya Kesuma</h1>
            <p>(HTML di dalam PHP versi 2)</p>";
            ?>
        </li>
        <li>
            <!-- Ini adalah Variabel didalam PHP  (#ingat harus disertai echo untuk print) -->
            <h1>Halo, Selamat Datang <?php echo "$nama"; ?></h1>
            <p>(PHP didalam HTML tetapi {echo "$var"}
                <br> ingat dalam <span>deklarasi variabel harus disertai $ dan disimpan pada<br> Tag
                    PHP)</span>

            </p>
        </li>
    </ol>

</body>

</html>
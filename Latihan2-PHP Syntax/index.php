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
//Variabel ditulis dengan $
$nama = "Aditya kesuma"; // Jangan Lupa Echo untuk output. tidak bisa langsung
$printKutip = "ini adalah kutip 2";

// Operator

$x = 10;
$y = 20;

$z = $x * $y;

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

    .class1 {
        font-weight: bold;
        font-size: 25px;
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
        <li>
            <!-- Perbedaan kutip 1 dan kutip 2  -->
            <h1><?php echo "$printKutip" ?></h1>
            <p>({?php echo "$printKutip" ?>)</p>

            <h1><?php echo '$printKutip' ?></h1>
            <p>({?php echo '$printKutip' ?})</p>
        </li>
        <h1 style="font-size: 100px;" class="op1"> Operator </h1><br>
        <li>
            <h1>Operasi aritmatika</h1>
            <p> x = 10<br> y = 20 </p>
            <p>Declared Method : <?php echo " hasil dari $x * $y = $z" ?></p>
            <p> Inline Method (Harus membuat 2 Sintax)
                <?php
                echo "Hasil dari $x * $y =";
                echo $x * $y
                ?></p>
        </li>
        <li>
            <h1>Penggabungan / Concat <span>( . )</span> menggunakan . <span>(Bedanya biasanya memakai + (di java, js,
                    dll)</span></h1>
            <p>
                <?php
                $first_name = "Aditya";
                $last_name = "Kesuma";
                echo $first_name . " " .  $last_name;
                ?>
            </p>
            <p class="class1">
                <?php echo "Halo, Selamat datang " . $nama ?>
            </p>
        </li>
        <li>
            <h1>Operator Assignment</h1>
            <p>
                <?php
                $a = 1;
                $a += 2;
                echo "a = " . $a;
                ?>
                <!-- Hasil output adalah 3 (karena 1 += 2) -->
            </p>
            <p>
                <?php
                $b = "Aditya";
                $b .= " ";
                $b .= "Kesuma";
                //disini saya menggunakan Concat untuk menambahkan String (pada Java Kita dapat menggunakan operator += jadi bedanya concat sendiri dan += sendiri );
                echo "$b";
                ?>
            </p>
        </li>
        <li>
            <h1>Operator Perbandingan </h1>
            <p>
                <?php
                var_dump(1 < 5); // ini akan menghasilkan nilai boolean
                echo "<br>";
                var_dump(6 < 5); // ini akan menghasilkan nilai boolean

                ?>
            </p>
        </li>
        <li>
            <h1>Operator Identitas</h1>
            <p><?php
                var_dump(1 === "1"); // output -> bool(false)
                ?>
            </p>
        </li>
        <li>
            <h1>Operator Logika</h1>
            <p>
                <?php
                $x = 3;
                $y = 4;
                echo "<b>Operator && (AND)</b> <br>";
                var_dump($x > $y && 1 == 1); // apakah x = 3 > y = 4 && 1 == 1; // Output False
                echo "<br>";
                var_dump($x < $y && 1 == 1); // apakah x = 3 <br y = 4 && 1 == 1 // Output True 
                echo "<br><br><b>Operator || (OR) </b><br>";
                var_dump($x > $y || 1 == 1); // apakah x = 3 > y = 4 && 1 == 1; // Output False
                // OR = (False & True = True) 
                echo "<br>";
                var_dump($x < $y || 1 == 2); // apakah x = 3 < y = 4 && 1 == 1 // Output True 
                //  OR = (TRUE & FALSE = True)

                echo "Operator ! (NOT)";

                ?>
            </p>
        </li>
    </ol>

    <script src="script.js"></script>
</body>

</html>
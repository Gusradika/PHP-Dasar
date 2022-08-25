<?php
$nama = ["Aditya Kesuma", "Aditya Ngurah", "Ngurah Kesuma", "Juan Aditya"];
$nim = ["21410100039", "2141000053", "2141414144", "2141419999999"];
$Semester = ["Sem 3", "Sem 4", "Sem 5", "Sem 6"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Menampilkan data sesuai Array</title>
    <style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
        box-sizing: border-box;
    }

    .container h1 {
        text-align: center;
        text-transform: capitalize;

    }

    .container {
        width: 1400px;
        margin: 0 auto;
        border: 1px solid red;
    }

    div.container h2 {
        margin-bottom: -30px;
    }

    .box-mhs {
        width: 200px;
        height: 200px;
        border: 1px red;
        margin: 20px;
        padding: 15px;
        border-radius: 30px;
        color: white;
        background-color: yellowgreen;
        opacity: "0.5";
    }

    .box-flex {
        display: flex;
        flex-direction: row;
        justify-content: center;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>Menampilkan data sesuai Array</h1>
        <div class="box-flex">
            <?php for ($i = 0; $i < count($nama); $i++) : ?>
            <div class="box-mhs">
                <?php echo "<h2>Mahasiswa ke - $i</h2><br><p>Nama : $nama[$i]<br> Nim : $nim[$i]<br>Semester : $Semester[$i]<hr><br>" ?>
            </div>
            <?php endfor; ?>
        </div>


    </div>
    <script>
    const container = document.getElementsByClassName("container")[0];
    const box_mhs = container.querySelectorAll(".box-mhs");

    box_mhs.forEach(function(x) {
        x.addEventListener("mouseenter", function(y) {
            y.target.style.transform = "scale(1.2)";
            y.target.style.opacity = "1";
        });
        x.addEventListener("mouseleave", function(y) {
            y.target.style.transform = "scale(1)";
            y.target.style.opacity = "0.2";
        });
    });
    </script>
</body>

</html>
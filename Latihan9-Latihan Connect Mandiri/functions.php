<?php
// Connect SQL server
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function query($x)
{
    // query dulu
    $result = mysqli_query(mysqli_connect("localhost", "root", "", "phpdasar"), $x);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $jurusan = $_POST["jurusan"];
    $gambar = $_POST["gambar"];

    // query insert data
    $query = "INSERT INTO mahasiswa
                VALUES('','$nama','$nim','$email','$jurusan','$gambar')";
    mysqli_query($conn, $query);
}
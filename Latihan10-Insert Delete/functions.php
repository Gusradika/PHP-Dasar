<?php

$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($x)
{
    $result = mysqli_query(mysqli_connect("localhost", "root", "", "phpdasar"), $x);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    //htmlspecialchars() <- adalah security measure untuk tidak menjalankan sintax html
    global $conn;
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // query insert data
    $query = "INSERT INTO mahasiswa
                VALUES('','$nama','$nim','$email','$jurusan','$gambar')";
    mysqli_query($conn, $query);

    return (mysqli_affected_rows($conn));
}

function hapus($x)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $x");
    return mysqli_affected_rows($conn);
}
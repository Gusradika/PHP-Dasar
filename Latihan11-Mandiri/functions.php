<?php

$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($x)
{
    global $conn;
    $result = mysqli_query($conn, $x);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambah($x)
{
    global $conn;
    // Avoid Parameter
    $nama = htmlspecialchars($x['nama']);
    $nim = htmlspecialchars($x["nim"]);
    $email = htmlspecialchars($x["email"]);
    $jurusan = htmlspecialchars($x["jurusan"]);
    $gambar = htmlspecialchars($x["gambar"]);


    $query = "INSERT INTO mahasiswa
                VALUES('','$nama','$nim','$email','$jurusan','$gambar')";

    mysqli_query($conn, $query);
    return (mysqli_affected_rows($conn));

    // query insert data
}

function hapus($x)
{
    global $conn;
    // Query Hapus

    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = '$x'");
    return (mysqli_affected_rows($conn));
}

function ubah($x)
{
    global $conn;
    $id = ($x['id']);
    $nama = htmlspecialchars($x['nama']);
    $nim = htmlspecialchars($x["nim"]);
    $email = htmlspecialchars($x["email"]);
    $jurusan = htmlspecialchars($x["jurusan"]);
    $gambar = htmlspecialchars($x["gambar"]);

    $query = "UPDATE mahasiswa SET 
    nama='$nama', 
    nim = '$nim', 
    email = '$email', 
    jurusan = '$jurusan', 
    gambar = '$gambar' WHERE id = $id";

    mysqli_query($conn, $query);

    return (mysqli_affected_rows($conn));
}
<?php

// 1 Connect
// P4 parameter. 1.Host. 2.Username. 3.Password, 4.Table;
$conn = mysqli_connect("localhost", "root", "", "latihan");

function query($query)
{
    global $conn;
    $rows = [];
    // 2 Query
    $result = mysqli_query($conn, $query);
    // 3 to Array Associative
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    };
    return $rows;
};


function tambahdata($data)
{

    global $conn;
    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $gambar = htmlspecialchars($data['gambar']);
    $alamat = htmlspecialchars($data['alamat']);
    $query = "INSERT INTO mahasiswa VALUES ('','$nama','$email','$jurusan','$alamat','$gambar')";
    mysqli_query($conn, $query);

    return (mysqli_affected_rows($conn));
}

function hapus($id)
{
    global $conn;
    $query = "DELETE FROM mahasiswa WHERE id = $id";

    mysqli_query($conn, $query);

    return (mysqli_affected_rows($conn));
}

<?php

<<<<<<< HEAD
// 1 Connect
// P4 parameter. 1.Host. 2.Username. 3.Password, 4.Table;
$conn = mysqli_connect("localhost", "root", "", "latihan");
=======
// querying

$conn = mysqli_connect("localhost", "root", "", "phpdasar");
>>>>>>> d40d18cc6015806e3a77d71c72d3557ee8e751c5

function query($query)
{
    global $conn;
    $rows = [];
<<<<<<< HEAD
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

=======

    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;

    $nama = htmlspecialchars($data['nama']);
    $nim = htmlspecialchars($data['nim']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);

    //UPLOAD GAMBAR
    $gambar = upload();
    if (!$gambar) {
        return false;           // return 0
    }

    $query = "INSERT INTO mahasiswa VALUES
            ('','$nama','$nim','$email','$jurusan','$gambar')";

    mysqli_query($conn, $query);

    return (mysqli_affected_rows($conn));       // return row (row > 0)
}

function upload()
{

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang di upload
    if ($error === 4) {
        return false;
    }
    $ektensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    // explode adalah 
    // fungsi yang akan memisahkan antara nama file dan ekstensi 
    // paramter satu adalah saat dimana mau di pecah. kita akan memecahnya di .
    // karena ekstensi selalu di bedakan pada . nya
    // hasil :
    // aditya.jpg = ['aditya', 'jpg'];
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    // end() adalah fungsi yang akan mengambil array yang paling terakhir.
    // str to lower akan memaksa array terakhir dari end agar merubah string ke huruf kecil
    if (!in_array($ekstensiGambar, $ektensiGambarValid)) {
        echo "
        <script>
        alert('yang anda upload bukan gambar!');
        </script>
        ";
        return false;
    }

    // cek jika ukuranya terlalu besar
    // dalam byte 1.000.000 = 1 mb
    if ($ukuranFile > 2e+6) {
        echo "
        <script>
        alert('Ukuran melebihi batas!');
        </script>
        ";
        return false;
    }

    // lolos pengecekan, gambar siap di upload
    // param 1 filename, 2 destination
    move_uploaded_file($tmpName, '../resource/' . $namaFile);

    // harus return nama file maka destinasi akan masuk ke database (String)
    return $namaFile;
}


>>>>>>> d40d18cc6015806e3a77d71c72d3557ee8e751c5
function hapus($id)
{
    global $conn;
    $query = "DELETE FROM mahasiswa WHERE id = $id";
<<<<<<< HEAD
=======
    mysqli_query($conn, $query);

    return (mysqli_affected_rows($conn));
}

function ubah($data)
{
    global $conn;

    $id = $data['id'];
    $nama = htmlspecialchars($data['nama']);
    $nim = htmlspecialchars($data['nim']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $gambarLama = htmlspecialchars($data['gambarLama']);

    //cek apakah user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] == 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }



    $query = "UPDATE mahasiswa SET
                nama = '$nama',
                nim = '$nim',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
            WHERE id = $id";
>>>>>>> d40d18cc6015806e3a77d71c72d3557ee8e751c5

    mysqli_query($conn, $query);

    return (mysqli_affected_rows($conn));
}

function cari($keyword)
{
    global $conn;
    $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%'OR jurusan LIKE '%$keyword%';";

    return (query($query));
<<<<<<< HEAD
}
=======
}
>>>>>>> d40d18cc6015806e3a77d71c72d3557ee8e751c5

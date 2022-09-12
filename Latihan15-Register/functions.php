<?php

// querying

$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query)
{
    global $conn;
    $rows = [];

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


function hapus($id)
{
    global $conn;
    $query = "DELETE FROM mahasiswa WHERE id = $id";
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

    mysqli_query($conn, $query);

    return (mysqli_affected_rows($conn));
}

function cari($keyword)
{
    global $conn;
    $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%'OR jurusan LIKE '%$keyword%';";

    return (query($query));
}

function register($data)
{
    // var_dump($data);
    global $conn;


    $username = strtolower(stripslashes($data['username']));
    $password = mysqli_real_escape_string($conn, $data['password']);

    $password2 = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO userdatabase VALUES ('','$username','$password2')";
    // cek user name sudah ada atau belum?
    $result = mysqli_query($conn, "SELECT username FROM userdatabase WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "
            <script>
                alert('Username sudah terdaftar');
                document.location.href='index.php';
            </script>
        ";
        return false;
    }

    // enkripsi password JANGAN PAKE MD5. Parameter 2 adalah metode enskripsi


    echo "
    <script>
    console.log(<?= $password ?>);
</script>
";
// tambahkan userbaru ke database

mysqli_query($conn, $query);

return (mysqli_affected_rows($conn));
}
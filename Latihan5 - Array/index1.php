<?php
// Array
// Variabel yang memiliki banyak nilai

// ada 2 cara membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");

// cara Baru
$bulan = ["Januari", "Februari", "Maret"];
// Element pada Array PHP tipe data tidak apa berbeda.

// Menampilkan satu element array
echo "Menampilkan satu element array : $hari[0]";
echo "<br><br>";

//Menambahkan Array pada PHP.
$hari[] = "Kamis";
$hari[] = "Jum'at";

//Looping For harus menggunakan fungsi count() tidak bisa menggunakan length
for ($i = 0; $i < count($hari); $i++) {
    echo "Indeks ke : $i => $hari[$i]<br>";
};
echo "<br>";


//Fungsi foreach di hitung sebagai method. beda dengan JS
/*
    JS => variable.forEach(Function(PARAM){CODE_BLOCK});
    PHP => foreach (Variabel as variable){CODE_BLOCK}
*/
foreach ($bulan as $i) {
    echo $i . "<br>";
}
echo "</br>";

// cara mengetahui isi array tanpa looping (Debugging)
var_dump($bulan);
echo "</br>";
var_dump($hari);
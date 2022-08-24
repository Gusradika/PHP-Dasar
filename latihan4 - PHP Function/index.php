<?php
// ada 2 tipe function dalam Bhs Pemrograman yaitu
// 1. Built-in Function
// 2. Defined Function

/*
Date / Time

time()  // 1 param - or more
date()  // 1 param
mktime()
strtotime()


*/
// time() 
// d = day, m = month, y = year
// d, m , y = 24, 08, 22
// D , M , Y = WED, AUG, 2022
// l = full day output
// Besar kecil dari penulisan parameter akan menghasilkan inputan yang berbeda pula
echo date("D, M, Y ") . "<br>";
echo date("d, m, y ") . "<br>";
echo "<br>";
echo date("l, d-m-Y");

// ############
// Time
// UNIX timestamp / EPOCH time
// yang tampil adalah detik yang telah berlalu sejak 1 Januari 1970
echo "<br>";
echo time();

// Paramter kedua untuk date() adalah pengambilan hari apa yang akan muncul setelah hari ini. rumus untuk menghasilkan hari selanjutnya adalah :

// detik per menit * jam per menit * hari ke jam * <jumlah hari>
// 2 hari :
// 60 * 60 * 24 * 2
echo "<br>";
echo "Sekarang hari : " . date("l") . "<br>Lusa hari : "
    . date("l", time() + 60 * 60 * 24 * 2);



// #####
// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0); -> 6 parameter
// jam, menit, detik, bulan, tanggal, tahun
echo "<br>";
// echo mktime(0, 0, 0, 09, 15, 2000);
echo "<br>";
echo date("l, d-m-Y", mktime(0, 0, 0, 9, 15, 2000));


// #####
// strtotime()
// Tanggal to detik
echo ("<br>");
echo strtotime("15 sep 2000");
echo "<br>";
echo mktime(0, 0, 0, 9, 15, 2000);
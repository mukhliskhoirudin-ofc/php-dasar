<?php

// date : (untuk menampilkan tanggal dengan format tertentu)
// hari, tgl-bln-thn
echo date("l, d-M-Y");
echo date("l"); // hari
echo date("d"); // tanggal
echo date("M"); // bulan
echo date("m"); // angkabulan
echo date("Y"); // tahun
echo date("y"); // tahun
echo date("l, d-M-Y"); // penerapan

// time : 
echo time(); // UNIX Timestamp / EPOCH time = detik yang sudah berlalu sejak 1 januari 1970
// kombinasi fungsi date dan time :
echo date("d M Y", time() + 60 * 60 * 24 * 100);

// mktime : (membuat sendiri detik)
// mktime(0,0,0,0,0,0)
// jam,menit,detik,bulan,tanggal,tahun

// contoh mengetahui detik dengan waktu yang ditentukan :
echo mktime(0, 0, 0, 7, 28, 2024);

// contoh combinasi format waktu yang ditentukan dengan format yg lainnya / mengecek lahir
echo date("l, d-M-Y", mktime(0, 0, 0, 2, 2, 2003));

// strtotime = sama saja
echo date("l", strtotime("2 feb 2003"));

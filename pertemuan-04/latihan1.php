<?php

// element pada array boleh memiliki tipedata yang berbeda
// untuk memanggil semua array harus pakai print_r($namaarray) // pakai var_dump untuk melihat array dan jenis tipedata jumlah karaternya
// kalo mau menampilkan 1 bisa menggunakan echo, contoh : echo $namaarray[5] --> nomor = index yang dimulai dari 0-n

// contoh array biasa
$hari = ["senin", "selasa", "rabu", "kamis", "jum'ad", "Sabtu", "minggu"];
print_r($hari); //print_r = untuk memanggil semua array
echo $hari[4]; //untuk memanggil 1 array

echo ("<br>");

// cara menambahkan array sederhana :
$bulan = ["januari", "februari", "maret"];
$bulan[] = "april"; // yang ditambah
$bulan[] = "mei";
$bulan[] = "juni";

print_r($bulan);
echo $bulan[0];

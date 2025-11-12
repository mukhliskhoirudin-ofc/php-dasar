<?php

$nama = "Muklis Khoirudin";
echo "Hallo, nama saya $nama";

/******************************************/

// operator Aritmatika ( + - * / % ) 

$x = 50;
$y = 20;
echo $x + $y;

/******************************************/

// operator penggabung sring / concation /concat ( . )

$nama_depan = "Muklis";
$nama_belakang = "Khoirudin";
echo $nama_depan . " " . $nama_belakang;

/******************************************/

// operator assigment ( =, +=, -=, *=, %=, .= )
// .=  : untuk menghubungkan tanpa menimpa ketika variabel sama
// +=  : untuk menambahkan tanpa menimpa, dll

// contoh 1 :
$x = 1;
$x += 5;
echo $x;

// contoh 2 :
$nama = "Mukhlis";
$nama .= " ";
$nama .= "Khoirudin";
echo $nama;

/******************************************/

// operator perbandingan ( <, >, <=, >=, ==, != ) tidak mengecek tipedata

var_dump(5 != 5);

/******************************************/

// identitas ( ===, !== ) biasa digunakan untuk cek identitas biar tau tipedata apa

var_dump(1 === "1");

/******************************************/

// logika ( && || ) biasa digunakan untuk pengkondisian
// && : harus benar semua biar true
// || : benar 1 bisa true

$x = 30;
var_dump($x < 20 || $x % 2 == 0);

<?php
// contoh sintak if..else :
$i = 10;
if ($i < 20) {
    echo "benar";
} else {
    echo "salah";
}

// contoh sintak if..else..if..else :
$i = 30;
if ($i < 20) {
    echo "benar";
} else if ($i == 20 || $i < 40) {
    echo "bingo!";
} else {
    echo "salah";
}

$nilai = 50;
if ($nilai >= 90) {
    echo "Nilai A";
} elseif ($nilai >= 80) {
    echo "Nilai B";
} elseif ($nilai >= 70) {
    echo "Nilai C";
} elseif ($nilai >= 60) {
    echo "Nilai D";
} else {
    echo "Nilai E";
}

// contoh sintak switch..case : 
// contoh 1 : (menggunakan case angka)
$hari = 1;               // inisialisasi dulu
switch ($hari) {         // panggil yang sudah di inisialisasi
    case 0:              // sesuaikan dengan yang mau dicari angka/huruf
        echo "Minggu";
        break;
    case 1:
        echo "Senin";
        break;
    case 2:
        echo "Selasa";
        break;
    case 3:
        echo "Rabu";
        break;
    case 4:
        echo "Kamis";
        break;
    case 5:
        echo "Jumad";
        break;
    case 5:
        echo "Sabtu";
        break;
    default:
        echo "Tidak ditemukan";
        break;
}

// contoh 2 : (menggunkana case huruf dan output yang sama)
// catatan : jika outputnya sama semua, bisa dihapus semua sisakan output nya 1 saja
$jenisMakanan = "tea";
switch ($jenisMakanan) {
    case "roti":
    case "susu":
    case "tea":
    case "nasi":
        echo "makanan/miniman sehat";
        break;
    case "batu":
        echo "makanan berbahaya";
        break;
    default:
        echo "makanan tidak ada di list";
        break;
}

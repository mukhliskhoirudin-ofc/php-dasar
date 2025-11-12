<?php
// variabel scope (lingkup variabel)

$x = 10;

function tampilX()
{
    global $x; //tambahkan (global $x) jika ingin mengambil isi dari luar function
    echo $x;
}

echo tampilX();

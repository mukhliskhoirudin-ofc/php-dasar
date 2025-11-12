<?php

//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// fungsi query/untuk menampilkan seluruh data
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

//fungsi tambah
function tambah($data)
{
    global $conn;
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // Query tanpa nilai kosong untuk kolom id
    $query = "INSERT INTO mahasiswa (nrp, nama, email, jurusan, gambar) VALUES ('$nrp','$nama','$email','$jurusan','$gambar')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi hapus
function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

//fungsi ubah - sama saja kayak fungsi tambahdata
function ubah($data)
{
    global $conn;

    $id = htmlspecialchars($data["id"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // Query untuk mengupdate data
    $query = "UPDATE mahasiswa SET 
                    nrp = '$nrp', 
                    nama = '$nama', 
                    email = '$email', 
                    jurusan = '$jurusan', 
                    gambar = '$gambar' 
                WHERE id = $id";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

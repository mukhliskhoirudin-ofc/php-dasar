<?php

//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "wpu_php_dasar");

// fungsi query/untuk menampilkan seluruh data
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $rows;
}

//fungsi create
function create($dataCreate)
{
    global $conn;
    $nrp = htmlspecialchars($dataCreate["nrp"]);
    $nama = htmlspecialchars($dataCreate["nama"]);
    $email = htmlspecialchars($dataCreate["email"]);
    $jurusan = htmlspecialchars($dataCreate["jurusan"]);

    // upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO mahasiswa (nrp, nama, email, jurusan, gambar) VALUES ('$nrp','$nama','$email','$jurusan','$gambar')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // Cek apakah tidak ada gambar yang di-upload
    if ($error === 4) {
        echo "<script>alert('Pilih gambar terlebih dahulu');</script>";
        return false;
    }

    // Cek apakah yang di-upload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = strtolower(pathinfo($namaFile, PATHINFO_EXTENSION));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>alert('Yang anda upload bukan gambar!');</script>";
        return false;
    }

    // Cek jika ukuran file terlalu besar (contoh: 2MB = 2000000 bytes)
    if ($ukuranFile > 1000000) {
        echo "<script>alert('Ukuran gambar terlalu besar!');</script>";
        return false;
    }

    // Generate nama file baru untuk menghindari duplikasi
    $namaFileBaru = uniqid() . '.' . $ekstensiGambar;

    // Pindahkan file ke folder tujuan
    if (!move_uploaded_file($tmpName, 'img/' . $namaFileBaru)) {
        echo "<script>alert('Gagal mengupload gambar!');</script>";
        return false;
    }

    return $namaFileBaru;
}


//fungsi delete
function delete($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}

//fungsi update - sama saja kayak fungsi tambahdata
function update($dataUpdate)
{
    global $conn;
    $id = htmlspecialchars($dataUpdate["id"]);
    $nrp = htmlspecialchars($dataUpdate["nrp"]);
    $nama = htmlspecialchars($dataUpdate["nama"]);
    $email = htmlspecialchars($dataUpdate["email"]);
    $jurusan = htmlspecialchars($dataUpdate["jurusan"]);
    $gambarLama = htmlspecialchars($dataUpdate["gambarLama"]);

    // cek apakah user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE mahasiswa
            SET 
            nrp = '$nrp', 
            nama = '$nama', 
            email = '$email', 
            jurusan = '$jurusan', 
            gambar = '$gambar' 
            WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//fungsi searching
function search($keyword)
{
    $query = "SELECT * FROM mahasiswa 
            WHERE
            nrp LIKE '%$keyword%' OR
            nama LIKE '%$keyword%' OR
            email LIKE '%$keyword%' OR 
            jurusan LIKE '%$keyword%'";

    return query($query);
}

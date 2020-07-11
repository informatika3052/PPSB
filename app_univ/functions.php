<?php

//* koneksi ke xampp
$con = mysqli_connect("localhost", "root", "") or die(mysqli_error($con));

//*koneksi ke database
$database = mysqli_select_db($con, "universitas");

function query($query)
{
    global $con;

    $result = mysqli_query($con, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $con;

    $nama = $data['nama'];
    $nik = $data['nik'];
    $ttl = $data['ttl'];
    $jk = $data['jk'];
    $alamat = $data['alamat'];
    $agama = $data['agama'];
    $gambar = upload();

    $tambah = "INSERT INTO siswa 
            VALUES ('','$nama','$nik','$ttl','$jk','$alamat','$agama','$gambar')";

    mysqli_query($con, $tambah);

    return mysqli_affected_rows($con);
}

function upload()
{
    $foto = 'images.jpg';
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmp = $_FILES['gambar']['tmp_name'];

    //* cek gambar sudah diuplod atau belum
    if ($error === 4) {

        //echo "<script> alert ('upload foto');</script>";

        return $foto;
    }


    //* cek gambar atau bukan yang diupload
    $ekstensiGambarAsli = ['jpg', 'jpeg', 'png'];

    //* 'explode' memcah sebuah string menjadi array
    //* contoh gambar.jpg akan menjadi ['gambar' , 'jpg']
    $ekstensiGambar = explode('.', $namaFile);

    //* mengubah file menjadi huruf kecil dengan strtolower , 
    //* 'end' untuk mengambil ekstensi file yg paling terakhir
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    //*mengecek adakah sebuah string di sebuah array
    //*parameter yang di upload user , eksetnsi yang di ijinkan
    if (!in_array($ekstensiGambar, $ekstensiGambarAsli)) {
        echo "<script> alert ('foto tidak valid'); </script>";

        return false;
    }

    //*cek ukuran gambar dalam byte
    if ($ukuranFile > 1000000) {
        echo "<script>
        alert ('gambar terlalu besar');
        </script>";

        return false;
    }

    //*membangkitkan angka random dengan uniqid()
    //*mencegah kesamaan nama file dengan gambar yang berbeda
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambarAsli;

    //*memindahkan file yang telah diuplod
    move_uploaded_file($tmp, 'img/' . $namaFileBaru);

    //*agar nama file bisa masuk ke database
    return $namaFileBaru;
}
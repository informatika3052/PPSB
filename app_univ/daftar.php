<?php

//!masukkan file koneksi database
require "functions.php";

//* pegecekan jika data telah ditambahkan, masukkan data form ke table database
if (isset($_POST['Submit'])) {

    if (tambah($_POST) > 0) {
        //* tampilkan pesan ketika user menambahkan
        echo "
                <script>
                    alert('data berhasil ditambahkan');
                    document.location.href= 'index.php';
                </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal ditambahkan');
            document.location.href = 'index.php';
        </script>
        ";
    }
}
?>

<html>

<head>
    <link rel="stylesheet" href="../pertemuan19/bootstrap-4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../pertemuan19/bootstrap-4.0.0/dist/css/style.css">

    <title>ADD DATA</title>
</head>

<body>
    <a href="index.php"> &laquo;
        BACK </a>
    <h1 align="right" class="display-4" style="font-style: oblique;">
        <font color="red"> R A U - Wrench</font>
    </h1>
    <p align="right" class="lead" style="font-style: oblique;">
        <font color="yellow">Special Wrench Market</font>
    </p>
    </div>
    </div>

    <b>Tambah Data Baru</b>
    <br><br>

    <form action="" method="POST" enctype="multipart/form-data">


        <table width="100%" border="0">

            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" size="50" required></td>
            </tr>

            <tr>
                <td><br>Foto
                    <center><img src="img/images.jpg" width="100" align="right"></center> <br>
                </td>
                <td><br><br><input type="file" name="gambar" id="gambar" align="right"></td>
            </tr>

            <tr>
                <td>NIK</td>
                <td><input type="text" name="nik" size="50" required></td>
            </tr>

            <tr>
                <td>Tempat, Tgl Lahir</td>
                <td><input type="text" name="ttl" size="50" required></td>
            </tr>

            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="text" name="jk" size="50" required></td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" size="50" required></td>
            </tr>

            <tr>
                <td>Agama</td>
                <td><input type="text" name="agama" size="50" required></td>
            </tr>


            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="+ Tambahkan"></td>
            </tr>
        </table>
    </form>

</body>

</html>
<?php

require "functions.php";

$mhs = query("SELECT * FROM siswa");
// $mhs = query($query);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIV_86</title>
</head>

<body>
    <h1>Data diri peserta</h1>
    <a href="daftar.php"> Tambah Peserta</a>
    <table border="1" cellpadding="10" cellspacing="0" style="width: 50%;">
        <tr>
            <center>
                <th>No</th>
                <th>Nama</th>
                <th>Foto</th>
                <th>NIK</th>
                <th>Tempat, tgl Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Agama</th>

        </tr>

        <?php $i = 1; ?>
        <?php foreach ($mhs as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row['nama']; ?></td>
            <td>
                <center><img src="img/<?= $row['gambar']; ?>">
            </td>
            </center>
            <td><?= $row['nik']; ?></td>
            <td><?= $row['ttl']; ?></td>
            <td><?= $row['jk']; ?></td>
            <td><?= $row['alamat']; ?></td>
            <td><?= $row['agama']; ?></td>



        </tr>

        <?php $i++; ?>
        <?php endforeach; ?>
</body>

</html>
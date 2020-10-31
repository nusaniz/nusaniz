<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}


require 'function.php';
// $mahasiswa = query("SELECT * FROM mahasiswa"); // sort terbaru dibawah
$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC"); //sort terbaru diatas
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="icon" href="img/logo.jpg" type="image/jpg">
    <link rel="stylesheet" href="style.css">
    <style>
        * {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .cont-form {
            display: flex;
            justify-content: center;
            /* border: 1px solid; */
        }

        .cont-second {
            padding: 10px;
            /* width: 800px; */
            /* margin: 0 auto; */
            /* border: 1px solid; */

        }

        #container {
            display: flex;
            justify-content: center;
            /* border: 1px solid; */
        }

        td.gambar {
            display: flex;
            justify-content: center;
        }

        td.jurusan {
            text-align: center;
        }

        td a.aksi {
            padding: 5px;
            color: white;
            text-decoration: none;
            cursor: pointer;
            border: 1px solid;
        }

        td a.aksi:hover {
            background-color: black;
        }

        td.number {
            text-align: center;
            /* background-color: coral; */
        }

        th {
            background-color: #d1f9e8;
        }

        a.tambah-data {
            letter-spacing: 0.1rem;
            text-decoration: none;
        }

        .tambah-data {
            border-color: #2DCE89;
            background-color: #2DCE89;
        }
    </style>
</head>

<body>
    <div class="cont-form">
        <div class="cont-second">
            <a class="btn-primary logout" href="logout.php">logout</a>
            <a href="index4.php">back</a>


            <h1>Daftar Mahasiswa</h1>

            <a class="btn-primary tambah-data" href="tambah.php">Tambah data</a>
            <br><br>

            <form action="" method="POST">

                <input type="text" name="keyword" size="30" autofocus placeholder="Masukkan keyword pencarian . ." autocomplete="off" id="keyword">
                <button type="submit" name="cari" id="tombol-cari">Cari</button>


            </form>
            <br>
        </div>

    </div>


    <div id="container">

        <table border="1" cellpadding="10" cellspacing="0">

            <tr>
                <th>No .</th>
                <th>Aksi</th>
                <th>Foto</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>

            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($mahasiswa as $row) : ?>
                    <tr>
                        <td class="number"><?= $i ?></td>
                        <td class="aksi-cont">
                            <a class="btn-primary aksi ubah" href="ubah.php?id=<?= $row["id"] ?>">ubah</a>
                            <a class="btn-primary aksi hapus" href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
                        </td>
                        <td class="gambar"><img src="img/<?= $row["gambar"]; ?>" width="50" alt=""></td>
                        <td><?= $row["nrp"]; ?></td>
                        <td><?= $row["nama"]; ?></td>
                        <td><?= $row["email"]; ?></td>
                        <td class="jurusan"><?= $row["jurusan"]; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
    <script src="js/script.js"></script>
</body>

</html>
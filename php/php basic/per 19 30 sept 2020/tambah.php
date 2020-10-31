<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'function.php';
// koneksi
// $conn = mysqli_connect("localhost", "root", "", "phpdasar");


// cek apakah tombol sudah ditekan atau belum
if (isset($_POST["submit"])) {


    // cek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil ditambahkan');
            // document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal ditambahkan');
            // document.location.href = 'index.php';
        </script>
        ";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data mahasiswa</title>
    <link rel="icon" href="img/logo.jpg" type="image/jpg">
    <link rel="stylesheet" href="style.css">
    <style>
        * {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

        }

        .container {
            border: 1px solid;
        }

        .card {
            border-radius: 1rem;
            width: 400px;
            margin: 0 auto;
            padding-bottom: 1.5rem;
            box-sizing: border-box;
            border: 1px solid;
            background-color: #F7FAFC;
        }

        .card form {
            padding: 1.2rem;
            border: 1px solid;
        }

        .card form li {
            margin: 0.2rem;
        }

        .card form label {
            font-weight: 600;
            font-size: 1.1rem;
            margin-bottom: 0.3rem;
            text-transform: capitalize;
            display: block;
        }
        
        .card form input {
            width: 100%;
            font-size: 1.1rem;
            box-sizing: border-box;
        }

        .card form ul {
            padding: 0;
            list-style-type: none;
        }

        .card form ul li.btn-tambah {
            display: flex;
            justify-content: center;
            margin-top: 2rem;
            border: 1px solid;
        }
        
        .card form ul li.btn-tambah button{
            cursor: pointer;
        }
        
        .btn-kembali {
            margin-top: -2rem;
            display: flex;
            justify-content: center;
            overflow: hidden;
            border: 1px solid;
            
        }

        .btn-kembali button {
            cursor: pointer;
        }
        
        .card h1 {
            font-size: 1.8rem;
            text-align: center;
            text-transform: capitalize;
            border: 1px solid;

        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <h1>Tambah data<br>mahasiswa</h1>
            <form action="" method="post" enctype="multipart/form-data">

                <ul>
                    <li>
                        <label for="nama">nama</label>
                        <input type="text" name="nama" id="nama">
                    </li>
                    <li>
                        <label for="nrp">nrp</label>
                        <input type="text" name="nrp" id="nrp">
                    </li>
                    <li>
                        <label for="email">email</label>
                        <input type="text" name="email" id="email">
                    </li>
                    <li>
                        <label for="jurusan">jurusan</label>
                        <input type="text" name="jurusan" id="jurusan">
                    </li>
                    <li>
                        <label for="gambar">gambar</label>
                        <input type="file" name="gambar" id="gambar">
                    </li>
                    <li class="btn-tambah">
                        <button class="btn-primary tambah-ubah-data" type="submit" name="submit">Tambah data</button>
                    </li>
                </ul>

            </form>
            <br>

            <div class="btn-kembali">
                <button class="btn-primary kembali" onclick="document.location = 'index.php'">kembali</button>
            </div>
        </div>

    </div>

    <iframe src="index.php" frameborder="0" width="100%" height="400"></iframe>
</body>

</html>
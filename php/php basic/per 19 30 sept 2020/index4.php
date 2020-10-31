<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halo</title>
    <link rel="icon" href="img/logo.jpg" type="image/jpg">
    <style>
        * {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
    </style>
</head>

<body>
    <a href="logout.php">logout</a>

    <ul>
        <li><a href="index.php">Data Mahasiswa</a></li>
        <li><a href="#" onclick="window.location = 'admin11734.php'">Dashboard Admin</a></li>
    </ul>






</body>

</html>
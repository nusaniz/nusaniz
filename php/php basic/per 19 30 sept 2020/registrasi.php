<?php
require 'function.php';

if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
            alert('user baru berhasil ditambahkan');
            </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.jpg" type="image/jpg">
    <title>Halaman registrasi</title>
    <style>
        * {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .container {
            width: 300px;
            margin: 0 auto;
            border: 1px solid;
        }

        .cont {
            /* width: 150px; */
            margin: 0 auto;
            border: 1px solid;

        }

        label {
            display: block;
        }

        form {
            width: 150px;
            /* text-align: center; */
            box-sizing: border-box;
        }

        ul {
            width: 100%;
            box-sizing: border-box;
            padding-left: 0;
        }

        ul li {
            box-sizing: border-box;
            list-style-type: none;
            margin: 5px 0 0 0;
            border: 1px solid;
        }

        li input {
            box-sizing: border-box;
            width: 100%;
        }

        li.btn {
            display: flex;
            justify-content: center;
            /* align-items: center; */
            text-transform: capitalize;
        }

        h1 {
            text-align: center;
        }

        .form {
            width: 100%;
            box-sizing: border-box;
            justify-content: center;
            display: flex;
            border: 1px solid;
        }

        .login p {
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Registrasi</h1>


        <div class="form">
            <form action="" method="post">
                <ul>
                    <li>
                        <label for="username">username</label>
                        <input id="username" type="text" name="username" id="username" autofocus>
                    </li>
                    <li>
                        <label for="password">password</label>
                        <input type="password" name="password" id="password">
                    </li>
                    <li>
                        <label for="password2">konfirmasi password</label>
                        <input type="password" name="password2" id="password2">
                    </li>
                    <li class="btn">
                        <button type="submit" name="register">register</button>
                    </li>
                </ul>
            </form>
        </div>

        <div class="login">
            <p>sudah punya akun? <a href="login.php">Login</a></p>
        </div>

    </div>





    <script>
        // var userid = document.getElementById("username").value;

        // if (userid === "") {
        //     alert("user masih kosong");
        // } else {
        //     alert("sukses");
        // }
    </script>
</body>

</html>
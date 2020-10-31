<?php
session_start();

if (isset($_SESSION["login"])) {
    header("Location: index.php");
}

require 'function.php';

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // set session
            $_SESSION["login"] = true;


            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUSDATIN - ILKOM E4</title>
    <link rel="icon" href="img/logo.jpg" type="image/jpg">
    <link rel="stylesheet" href="font-awesome/css/all.css">
    <style>
        * {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: #172B4D;
        }

        label {
            display: block;
            font-size: 20px;
            text-transform: capitalize;
            /* background-color: white; */
            background-color: #f7fafc !important;
        }

        .container {
            /* padding: 10px; */
            border: 1px solid;
        }

        .login-cont {
            width: 300px;
            border-radius: .375rem;
            margin: 0 auto;
            padding: 2rem;
            background-color: #f7fafc !important;
            /* border: 1px solid; */
        }

        h1 {
            margin: 0px 0 15px 0;
            text-align: center;
            color: #32325D;
            background-color: #f7fafc !important;
        }

        ul {
            padding: 0;
            list-style: none;
            background-color: #f7fafc !important;
        }

        p.error-message {
            background-color: #f7fafc !important;
        }

        li {
            margin: 1rem 0 1rem 0;
            background-color: #f7fafc !important;
        }

        form {
            width: 300px;
            background-color: #f7fafc !important;
            /* border: 1px solid; */
        }

        form input {
            width: 100%;
            font-size: 1.3rem;
            border: none;
            background-color: white;
            box-sizing: border-box;
        }

        li.login {
            display: flex;
            justify-content: center;
            align-items: center;
            /* margin-top: 20px; */
            margin: 2rem 0 2rem 0;
            background-color: #f7fafc !important;
        }

        li.btn-primary button {
            font-weight: 600;
            letter-spacing: 0.5px;
            font-size: 1rem;
            color: #fff;
            text-transform: capitalize;
            text-align: center;
            vertical-align: middle;
            border-color: #5e72e4;
            background-color: #5e72e4;
            box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
            border-radius: .375rem;
            /* line-height: 0; */
            /* font-size: 20px; */
            padding: .625rem 1.25rem;

        }

        li.btn-primary button:hover {
            background-color: #4558c1;
            cursor: pointer;
        }

        .register a {
            text-transform: capitalize;
            text-decoration: none;
            color: black;
        }

        .register a:hover {
            text-decoration: underline;
        }

        .input {
            display: flex;
            border-radius: .375rem;
            padding: 0.5rem;
            border: 1px solid #e2e2e2;
            background-color: white;
            -webkit-box-shadow: 10px 10px 37px -3px rgba(0, 0, 0, 0.22);
            -moz-box-shadow: 10px 10px 37px -3px rgba(0, 0, 0, 0.22);
            box-shadow: 10px 10px 37px -3px rgba(0, 0, 0, 0.22);
            /* border: 1px solid; */
        }

        .input i {
            color: grey;
            margin-right: 0.4rem;
            background-color: white;
            /* border: 1px solid; */
        }

        .register {
            margin-top: 0.5rem;
            background-color: #F7FAFC;
        }

        .register a {
            background-color: #F7FAFC;
        }
    </style>
    <style>
        .headertitle {
            width: 350px;
            margin: 20px auto 20px auto;
            display: flex;
            box-sizing: border-box;
            /* border: 1px solid white; */
        }

        .headertitle h2 {
            color: white;
        }

        .headertitle .logotitle {
            width: 20%;
            box-sizing: border-box;
            display: flex;
            align-items: center;
            justify-content: center;
            /* display: block; */
            /* border: 1px solid white; */
        }

        .headertitle .logotitle img {
            width: 100%;
            display: block;
            box-sizing: border-box;
            border-radius: 10px;
            /* width: 10%; */
        }

        .headertitle .maintitle {
            width: 80%;
            padding: 0 0 0 20px;
            /* padding-left: 20px; */
            box-sizing: border-box;
            /* border: 1px solid white; */
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="headertitle">
            <div class="logotitle">
                <img src="img/logo.jpg" alt="">
            </div>
            <div class="maintitle">
                <h2>PUSDATIN MANDIRI ILKOM E4</h2>
            </div>
        </div>
        <div class="login-cont">
            <h1>Login</h1>

            <?php if (isset($error)) : ?>
                <p class="error-message" style="color: red; font-style: italic;">username / password salah</p>
            <?php endif; ?>

            <form action="" method="POST">
                <ul>
                    <li>
                        <label for="username">username</label>
                        <div class="input">
                            <i class="fa fa-user fa-2x"></i>
                            <input type="text" name="username" id="username" placeholder="  Username" autofocus>
                        </div>
                    </li>
                    <li>
                        <label for="password">password</label>
                        <div class="input">
                            <i class="fa fa-lock fa-2x"></i>
                            <input type="password" name="password" id="password" placeholder="  Password">
                        </div>
                    </li>
                    <li class="btn-primary login">
                        <button type="submit" name="login">login</button>
                    </li>
                </ul>
            </form>
            <div class="register">
                <a href="registrasi.php">registrasi</a>
            </div>
        </div>


        <!-- footer -->
        <style>
            .footer {
                max-width: 400px;
                box-sizing: border-box;
                margin: 0 auto;
                padding: 1.5rem;
                /* border: 1px solid; */
            }

            .footer p {
                letter-spacing: 0.1rem;
                font-weight: 600;
                color: white;
            }

            .footer p a {
                color: white;
                font-weight: 600;
                text-decoration: none;
            }

            .footer #lorem {
                display: none;
            }

            .footer .credit:hover {
                text-decoration: underline;
            }
        </style>
        <div class="footer">
            <p>© 2020 <a href="login.php">NUSANIZ TEAM</a></p>
            <p><a class="credit" href="#" onclick="credit()">credit</a></p>

            <div id="lorem">
                <p>Mochamad Nizar Narendra</p>
                <button onclick="closelorem()">close</button>
            </div>
        </div>
        <!-- footer -->

    </div>

    <script>
        var loremm = document.getElementById("lorem");

        function credit() {
            loremm.style.display = "block";
        }

        function closelorem() {
            loremm.style.display = "";
        }
    </script>
</body>

</html>
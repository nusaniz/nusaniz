<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning</title>
    <link rel="icon" href="img/logo.jpg" type="image/jpg">
    <script src="https://kit.fontawesome.com/3db1b1a2d1.js" crossorigin="anonymous"></script>
    <style>
        * {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            margin: 0;
        }

        body {
            background-color: #03035F;
        }

        .container {
            /* width: 1800px; */
            /* max-height: 400px; */
            height: 100%;
            width: 100%;
            /* display: flex; */
            /* justify-content: center; */
            box-sizing: border-box;
            overflow: auto;
            border: 1px solid white;

        }

        .group {
            width: 100%;
            box-sizing: border-box;
            display: flex;
            /* border: 1px solid; */
        }

        .item {
            width: 100%;
            box-sizing: border-box;
        }

        a {
            float: left;
            position: relative;
            margin: 0.5em;
            padding: 0.5em;
            background: #555;
            width: 15em;
            height: 8em;
            text-decoration: none;
            cursor: pointer;
            overflow: hidden;
            color: #fff;
            z-index: 9;
        }

        .box.satu {
            background: #00a8ec;
        }

        .box.dua {
            background: #FFC107;
        }

        .box.tiga {
            background: #C0392B;
        }

        .box.empat {
            background: #009432;
        }

        .box.lima {
            background: #5087A6;
        }

        .box.enam {
            background: #E67E22;
        }

        .box.tujuh {
            background: #795C37;
        }

        .box.delapan {
            background: #67BB6A;
        }

        .box.sembilan {
            background: #4CAF50;
        }

        span {
            position: absolute;
            left: 0.5em;
            bottom: 0.5em;
            font-size: 1em;
            font-weight: normal;
            z-index: 8;
        }

        i {
            position: absolute;
            bottom: 1em;
            left: 3em;
        }
    </style>
    <style>
        .title {
            width: 100%;
            box-sizing: border-box;
            display: flex;
            margin: 0 0 1rem 0;
            padding: 0.8rem;
            /* background-color: coral; */
            border-bottom: 1px solid white;
            /* border: 0 0 1px 0 white; */
        }

        .title .main {
            width: 90%;
            /* display: flex; */
            /* justify-content: center; */
            /* align-items: center; */
            box-sizing: border-box;
            border: 1px solid;
        }

        .title .logout {
            width: 20%;
            box-sizing: border-box;
            border: 1px solid;
        }

        .title .main h2 {
            text-align: center;
            color: white;
        }

        .title .logout button {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            /* width: 100%; */
            box-sizing: border-box;
            background-color: #FFC107;
            border: none;
        }
    </style>
</head>

<body>

    <div class="title">
        <div class="main">
            <h2>E-Learning</h2>
        </div>

        <div class="logout">
            <button>logout</button>
        </div>
    </div>

    <div class="container">

        <!-- group 1 -->
        <div class="group">
            <div class="item">
                <a class="box satu" href="#">
                    <span>Ganti Password</span>
                    <i class="fa fa-key fa-3x"></i>
                </a>
            </div>
            <div class="item">
                <a class="box dua" href="#">
                    <span>User</span>
                    <i class="fa fa-user fa-3x"></i>
                </a>
            </div>
            <div class="item">
                <a class="box tiga" href="#">
                    <span>Library</span>
                    <i class="fa fa-book-open fa-3x"></i>
                </a>
            </div>
        </div>
        <!-- end group 1 -->


        <!-- group 2 -->
        <div class="group">
            <div class="item">
                <a class="box empat" href="arsip.php">
                    <span>Archive</span>
                    <i class="fa fa-folder fa-3x"></i>
                </a>
            </div>
            <div class="item">
                <a class="box lima" href="#">
                    <span>Email</span>
                    <i class="fa fa-envelope fa-3x"></i>
                </a>
            </div>
            <div class="item">
                <a class="box enam" href="#">
                    <span>Schedule</span>
                    <i class="fa fa-calendar-alt fa-3x"></i>
                </a>
            </div>
        </div>
        <!-- end group 2 -->

        <!-- group 3 -->
        <div class="group">
            <div class="item">
                <a class="box tujuh" href="#">
                    <span>Monitoring</span>
                    <i class="fa fa-chart-bar fa-3x"></i>
                </a>
            </div>
            <div class="item delapan">
                <a class="box" href="id.php" target="_blank">
                    <span>Identity</span>
                    <i class="fa fa-id-card fa-3x"></i>
                </a>
            </div>
            <div class="item">
                <a class="box sembilan" href="#">
                    <span>Photos</span>
                    <i class="fa fa-images fa-3x"></i>
                </a>
            </div>
        </div>
        <!-- end group 3 -->

    </div>
</body>

</html>


fonawesome
mail niset89885@finxmail.net
pass sdjfhgjhsgfsfsdf
<?php 
    session_start(); 

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: login.php");
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <title>Home | Connected College</title>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <style>
        body {
            background-color: #eee;
            font-family: 'Varela Round', sans-serif;
        }
        .card{
            height:auto;
            border:solid 1px;
            background-color: transparent;
        }
        img{
            margin-left:auto;
            margin-right:auto;
           
            padding:5px;
            max-width:100%;
        }
        a:link{
          text-decoration: none!important;
        }
    </style>
    <script>
        window.onload = () => {
            let el = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
            el.parentNode.removeChild(el);
        }
    </script>
</head>
<body>
    <div class="container-fluid text-center">
        <h1 style="padding-top: 1rem;">Connected College</h1>
        <hr>
    </div>
    <div class="container-fluid">
    <!-- logged in user information -->
        <?php  if (isset($_SESSION['username'])) : ?>
            <table width="100%">
            <tr><td align="left"><p">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p></td>
            <td align="right"><p><a href="index.php?logout='1'">Logout</a></p></td></tr></table>            
        <?php endif ?>
        <div class="clearfix"></div>
        <div class="row text-center">
            <div class="col-xs-12 col-sm-12 col-md-3">
                <a href="cricket.php"><div class="card">
                    <img src="http://cliparts.co/cliparts/6Ty/o9a/6Tyo9ayyc.png" style="width: 75px; height: 75px;">
                <p>SPORTS</p>
                </div></a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3">
                <a href="attendance.php"><div class="card">
                    <img src="download.png" style="width: 75px; height: 75px;">
                    <p>ATTENDANCE</p>
                </div></a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3">
                <a href="canteen.php"><div class="card">
                    <img src="icon.png" style="width: 75px; height: 75px;">
                    <p>CANTEEN</p>
                </div></a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3">
                <a href="clean.php"><div class="card">
                    <img src="1195435632419828222liftarn_International_Tidyman_logo.svg.hi.png" style="width: 75px; height: 75px;">
                    <p>CLEAN UP </p>
                </div></a>
            </div>
        </div>
        <br>
    </div>
</body>
</html>
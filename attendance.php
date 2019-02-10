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
    <title>Attendance | Connected College</title>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <style>
        body {
            background-color: #eee;
            font-family: 'Varela Round', sans-serif;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script> 
    <script>
       $(function() {
           $("#testToggle").click(function() {
               $("#show").slideToggle(500);
           });
       });
    </script>
</head>
<body>
    <div class="container-fluid text-center">
        <h2 style="padding-top: 1rem;">Attendance Subject-wise</h2>
        <hr>
    </div>
    <div class="container-fluid">

    <!-- logged in user information -->
        <?php  if (isset($_SESSION['username'])) : ?>
            <table width="100%">
            <tr><td align="left"><p">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p></td>
            <td align="right"><p><a href="index.php?logout='1'">Logout</a></p></td></tr></table>
            <br>
            <div class="col-6">
            <table>
            <tr>
                <td align="center">
                <div id="testToggle">
                <button class="btn btn-info" id="vcla" style="width: 100%;">Operating System</button>
                <div id="show">
                <?php include('db_connect.php'); 
                    $sql = "SELECT COUNT(id) FROM attendance WHERE status='p'AND sub='Maths' AND roll='26'";
                    $result =  mysqli_query($db,$sql);
                    $data = mysqli_fetch_assoc($result);
                    echo $data['COUNT(id)'];
                ?>
            </div></div></td>
            </tr>
        <?php endif ?>
    </div>
        
</body>
</html>
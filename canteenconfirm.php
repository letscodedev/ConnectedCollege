<?php include('server.php'); 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Confirm Order | Connected College</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="jquery.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <style>
        body {
            background-color: #eee;
            font-family: 'Varela Round', sans-serif;
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h1 style="padding-top:1rem; text-align: center;">Order Status</h1>
                <hr>
                <?php  if (isset($_SESSION['username'])) : ?>
                    <table width="100%">
                    <tr><td align="left"><p">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p></td>
                    <td align="right"><p><a href="index.php?logout='1'">Logout</a></p></td></tr></table>            
                <?php endif ?>
                <h1>
                    <?php
                        if(isset($_POST['search']))
                        {
                            $search = $_POST['search'];
                        }
                        if(empty($search))
                        {
                            echo "Error.";
                        }
                        else
                        {
                            $sql = "SELECT confirm FROM foodorder WHERE id = $search;";
                            $result =  mysqli_query($db,$sql);
                            $data = mysqli_fetch_assoc($result);
                            if($data['confirm'] == 0)
                            {
                                echo "Your Order # " . $search . " is awating for canteen staff's response.";
                            }
                            else
                            {
                                echo "Your Order is confirmed!";
                            }
                        }
                    ?>
                </h1>
                <br>
                <input type="button" value="Reload Page" onClick="window.location.reload()" class="btn btn-info">
            </div>
        </div>
    </div>
</body>
</html>
<?php include('server.php');
    if(isset($_POST['item1']))
    {
        $item1 = $_POST['item1'];
    }
    if(isset($_POST['item2']))
    {
        $item2 = $_POST['item2'];
    }
    if(isset($_POST['item3']))
    {
        $item3 = $_POST['item3'];
    }
    if(isset($_POST['item4']))
    {
        $item4 = $_POST['item4'];
    }
    if(empty($item1) && empty($item2) && empty($item3) && empty($item4))
    {
        echo "You haven't added anything!";
        exit();
    }
    else
    {
        $sql = "insert into foodorder (i1,i2,i3,i4,price) values (('$item1'),('$item2'),('$item3'),('$item4'), ('$item1')*30+('$item2')*20+('$item3')*25+('$item4')*50);";
        if (mysqli_query($db, $sql)) {
            $last_id = mysqli_insert_id($db);
            echo " ";
        } else {
            echo " ";
        }
    }
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
    <center><h1 style="padding-top: 1rem;">Canteen Orders</h1></center>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <hr>
                <?php  if (isset($_SESSION['username'])) : ?>
                <table>
                    <tr>
                        <th align="left"><p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p></th>
                        <th align="right"><p style="float:right;"><a href="index.php?logout='1'" style="color: red;">LOGOUT</a></p></th>
                    </tr>
                </table>            
                <?php endif ?>
                <hr>
            <h1 class="text-center"> 
            <?php
                $sql = "SELECT confirm, price FROM foodorder WHERE id = $last_id";
                $result =  mysqli_query($db,$sql);
                $data = mysqli_fetch_assoc($result);
                echo "Your Order # " . $last_id . ".";
            ?>
            </h1>
            <div class="text-center row">
                <div class="col-12">
                <form method="post" action="canteenconfirm.php">
                    <center><input type="text" name="search" style="width: 75%; display: none;" placeholder="Enter Order #" value="<?php echo htmlspecialchars($last_id); ?>">
                    <h3><?php echo "Billing amount: " . $data['price']; ?></h3>
                    <input type="submit" class="btn btn-info" value="Check Order Status"></center>
                </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</body>
</html> 

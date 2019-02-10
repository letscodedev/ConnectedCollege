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
    <title>Home</title>
    <style>
        .card {
            padding: 1rem;
            background-color: transparent;
        }
        img {
            width: 100%;
            height: auto;
        }
        p{
            text-align:center;
        }
        body {
            background-color: #eee;
        }
    </style>
    <script>
        function incrementValue()
        {
            var value = parseInt(document.getElementById('number').value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            document.getElementById('number').value = value;
        }
        
        function decrementValue()
        {
            var value = parseInt(document.getElementById('number').value, 0);
            value = isNaN(value) ? 0 : value;
            value--;
            if(value==-1)
            {
                value=0;
            }
            document.getElementById('number').value = value;
        }
        
        function incrementValue1()
        {
            var value = parseInt(document.getElementById('number1').value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            document.getElementById('number1').value = value;
        }
        
        function decrementValue1()
        {
            var value = parseInt(document.getElementById('number1').value, 0);
            value = isNaN(value) ? 0 : value;
            value--;
            if(value==-1)
            {
                value=0;
            }
            document.getElementById('number1').value = value; 
        }
         
        function incrementValue2()
        {
            var value = parseInt(document.getElementById('number2').value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            document.getElementById('number2').value = value;
        }
        
        function decrementValue2()
        {
            var value = parseInt(document.getElementById('number2').value, 0);
            value = isNaN(value) ? 0 : value;
            value--;
            if(value==-1)
            {
                value=0;
            }
            document.getElementById('number2').value = value; 
        }
        
        function incrementValue3()
        {
            var value = parseInt(document.getElementById('number3').value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            document.getElementById('number3').value = value;
        }
        
        function decrementValue3()
        {
            var value = parseInt(document.getElementById('number3').value, 0);
            value = isNaN(value) ? 0 : value;
            value--;
            if(value==-1)
            {
                value=0;
            }
             document.getElementById('number3').value = value; 
        }
    </script>
    <script>
        window.onload = () => {
            let el = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
            el.parentNode.removeChild(el);
        }
    </script>
</head>
<body>
    
    <div class="container-fluid">
        <center><h1>Canteen Orders</h1></center>
        <hr>
            <?php  if (isset($_SESSION['username'])) : ?>
                <table width="100%">
                <tr><td align="left"><p">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p></td>
                <td align="right"><p><a href="index.php?logout='1'">Logout</a></p></td></tr></table>            
            <?php endif ?>
            <div class="row">
            <form method="post" action="food.php">
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="card">
                        <img src="https://www.seriouseats.com/recipes/images/2015/07/20150702-sous-vide-hamburger-anova-primary.jpg">
                        <p text-align='center'>Burger</p>
                        <input type="button" onclick="decrementValue()" value="-" class="btn btn-warning"/>    
                        <input type="text" id="number" value="0"  name="item1"/>
                        <input type="button" onclick="incrementValue()" value="+" class="btn btn-warning" /> 
                        <p> X Rs. 30</p>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="card">
                        <img src="https://www.onionringsandthings.com/wp-content/uploads/2017/03/puff-pastry-margherita-pizza-6.jpg">
                        <p text-align='center'>Stuffed Puff</p>
                         <input type="button" onclick="decrementValue1()" value="-" class="btn btn-warning"/>
                        <input type="text" id="number1" value="0"  name="item2"/>
                        <input type="button" onclick="incrementValue1()" value="+" class="btn btn-warning"/> 
                        <p> X Rs. 20</p>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="card">
                        <img src="https://i2.wp.com/blog.ketchupp.in/wp-content/uploads/2017/05/F5.jpg?resize=800%2C800">
                        <p text-align='center'>Frankie</p>
                            <input type="button" onclick="decrementValue2()" value="-" class="btn btn-warning"/>
                            <input type="text" id="number2" value="0"  name="item3"/>
                            <input type="button" onclick="incrementValue2()" value="+" class="btn btn-warning"/> 
                        <p> X Rs. 25</p>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="card">
                        <img src="https://www.tasteofhome.com/wp-content/uploads/2017/10/Chicken-Pizza_exps30800_FM143298B03_11_8bC_RMS-2.jpg">
                        <p text-align='center'>Pizza</p>
                        <input type="button" onclick="decrementValue3()" value="-" class="btn btn-warning"/>
                        <input type="text" id="number3" value="0"  name="item4"/>
                        <input type="button" onclick="incrementValue3()" value="+" class="btn btn-warning"/> 
                        <p> X Rs. 50</p>
                    </div>
                </div>
                <div class="col-12">
                    <br>
                    <center><input type="submit" value="Pay" style="width: 75%;" class="btn btn-info"></center>
                    <br>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
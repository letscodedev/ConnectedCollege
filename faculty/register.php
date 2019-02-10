<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration | Connected College</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="jquery.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <style>
    body {
        background-color:#eee;
        font-family:'Varela Round',sans-serif;
    }
    form input {
        color:#000;
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
        <h2 style="padding-top: 1rem;">Register</h2>
    </div>
    
    <form method="post" action="register.php">

        <?php include('errors.php'); ?>
        <div class="container-fluid">
            <div class="row">
            <div class="col-12">
                <table>
                <tr>
                <div class="input-group">
                    <th><label>Username</label></th>
                    <th><input type="text" name="username" value="<?php echo $username; ?>"></th>
                </div>
                </tr>
                <tr>
                    <div class="input-group">
                        <th><label>Password</label></th>
                        <th><input type="password" name="password_1"></th>
                    </div>
                </tr>
                <tr>
                    <div class="input-group">
                        <th><label>Re-password</label></th>
                        <th><input type="password" name="password_2"></th>
                    </div>
                </tr>
                <tr>
                    <div class="input-group">
                        <th><button type="submit" class="btn btn-info" name="reg_user">Register</button></th>
                    </div>
                </tr>
            </table>
            <p>
                Already a member? <a href="login.php">Sign in</a>
            </p>
            </div>
        <table>
        </div>
        </div>
    </form>
</body>
</html>
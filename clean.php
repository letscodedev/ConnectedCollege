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
<title>
  Cleanliness | Connected College
</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <style>
  body {
      background-color:#eee;
        font-family:'Varela Round',sans-serif;
  }

  input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type=submit] {
    width: 100%;
    background-color: #5BC0DE;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type=submit]:hover {
    background-color: #45a049;
  }

  textarea {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    resize: none;
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
    <h1 style="padding-top: 1rem; text-align: center;">Cleanliness Form</h1>
    <hr>
    <?php  if (isset($_SESSION['username'])) : ?>
      <table width="100%">
      <tr><td align="left"><p">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p></td>
      <td align="right"><p><a href="index.php?logout='1'">Logout</a></p></td></tr></table>
      <hr>
        <?php endif ?>
      <form method="post" action="cleanphp.php">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Your name">
        <label for="rno">Room no.</label>
        <input type="text" name="roomID">
        <label for="dep">Department</label>
            <input type="text" name="dept">
        <textarea placeholder="Write your complaint" name="complain"></textarea>
        <input type="submit" value="submit">
      </form>
      <br>
  </div>
</body>
</html>
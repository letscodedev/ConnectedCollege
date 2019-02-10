<?php include('server.php');
        if (isset($_POST['name'])) 
        { 
            $name = $_POST['name'];
        }
        if (isset($_POST['roomID'])) 
        { 
            $room = $_POST['roomID'];
        }
        if (isset($_POST['dept'])) 
        { 
            $dept = $_POST['dept'];
        }
        if (isset($_POST['complain'])) 
        { 
            $complain = $_POST['complain'];
        }
        if(empty($name))
        {
            echo 'Please enter name!';
            exit();
        }
        else if(empty($room))
        {
            echo 'Please enter room number!';
            exit();     
        }
        else if(empty($dept))
        {
            echo 'Please enter department!';
            exit();
        }
        else if((empty($complain)))
        {
            echo 'Please describe the problem in brief !!';
            exit();
        }
        else
        {
            mysqli_query($db, "insert into clean (name, roomno, department, description) values (('$name'),('$room'),('$dept'),('$complain'));");
            header("Location: clean.php");
        }
?>
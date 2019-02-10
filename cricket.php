    <?php  
        $db = mysqli_connect('localhost', 'id5512706_svitcricket', 'svitcricket', 'id5512706_svitcricket');
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>SVIT Live Score App</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap.min.css">
        <script src="jquery.min.js"></script>
        <script src="popper.min.js"></script>
        <script src="bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">

        
    <style>
        
        body {
            width: 100%;
            height: 100%;
            background-color: #EEEEEE;
            font-family: 'Varela Round', sans-serif;
        }
        form {
            display: inline;
        }
        form input {
            width: 100%;
            margin: 0.5rem;
            font-weight:bold;
            color: black;
            background-color: #ffdd99;
        }
        footer {
          position: absolute;
          right: 0;
          bottom: 0;
          left: 0;
          padding: 1rem;
          background-color: #efefef;
          text-align: center;
          background: transparent;
        }
        canvas {
          overflow-y: hidden;
          overflow-x: hidden;
          width: 100%;
          margin: 0;
        position:absolute;
        top:0;
        left:0;
        }
        main {
            position: absolute;
            top: 0;
            width: 100%;
        }
    </style>    

    <script>
        window.onload = () => {
        let el = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
        el.parentNode.removeChild(el);
    }

    setTimeout(function(){
       window.location.reload(1);
    }, 10000);
    </script>

    </head>

    <body>
        <div class="main">
        <h1 class="text-center">Live Score Updates</h1>
        <hr style="width: 60%; border: 1px solid #000">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-12">
                    <?php
                        $sql = "SELECT toss FROM svitcricket WHERE id=0";
                        $result =  mysqli_query($db,$sql);
                        $toss1 = mysqli_fetch_assoc($result);
                        $sql = "SELECT toss FROM svitcricket WHERE id=1";
                        $result =  mysqli_query($db,$sql);
                        $toss2 = mysqli_fetch_assoc($result);
                        if($toss1['toss'] == 4 && $toss2['toss'] == 4)
                        {
                            echo "Toss time!";
                        }
                        else
                        {
                            $sql = "SELECT name FROM svitcricket WHERE toss=1";
                            $result =  mysqli_query($db,$sql);
                            $tosswon = mysqli_fetch_assoc($result);
                            echo $tosswon['name'];
                            echo " won the toss and elected to ";
                            $sql = "SELECT bf FROM svitcricket WHERE toss=1 ";
                            $result =  mysqli_query($db,$sql);
                            $bf = mysqli_fetch_assoc($result);
                            if($bf['bf']==0)
                            {
                                echo "bat first.";
                            }
                            else
                            {
                                echo "bowl first.";
                            }
                        }
                    ?>
                    
                </div>
                <div class="col-12">
                    <h3>
                        <?php
                            $sql = "SELECT name FROM svitcricket WHERE id=0";
                            $result =  mysqli_query($db,$sql);
                            $data = mysqli_fetch_assoc($result);
                            echo $data['name'];
                        ?>
                    </h3>
                    <p>
                        <?php
                            $sql = "SELECT runs FROM svitcricket WHERE id=0";
                            $result =  mysqli_query($db,$sql);
                            $data = mysqli_fetch_assoc($result);
                            echo $data['runs'];
                        ?>
                        /
                        <?php
                            $sql = "SELECT wickets FROM svitcricket WHERE id=0";
                            $result =  mysqli_query($db,$sql);
                            $data = mysqli_fetch_assoc($result);
                            echo $data['wickets'];
                        ?>
                    </p>
                    <p>
                        (
                        <?php
                            $sql = "SELECT balls FROM svitcricket WHERE id=0";
                            $result =  mysqli_query($db,$sql);
                            $data = mysqli_fetch_assoc($result);
                            
                            $try = $data['balls'];
                            $bdot = number_format(floor($try/6), 0);
                            echo $bdot;
                            echo '.';
                            $abot = number_format(floor($try%6), 0);
                            echo $abot;
                        ?>
                        overs )
                    </p>
                </div>
                <div class="col-12">
                    <h3>
                        <?php
                            $sql = "SELECT name FROM svitcricket WHERE id=1";
                            $result =  mysqli_query($db,$sql);
                            $data = mysqli_fetch_assoc($result);
                            echo $data['name'];
                        ?>
                    </h3>
                    <p>
                        <?php
                            $sql = "SELECT runs FROM svitcricket WHERE id=1";
                            $result =  mysqli_query($db,$sql);
                            $data = mysqli_fetch_assoc($result);
                            echo $data['runs'];
                        ?>
                        /
                        <?php
                            $sql = "SELECT wickets FROM svitcricket WHERE id=1";
                            $result =  mysqli_query($db,$sql);
                            $data = mysqli_fetch_assoc($result);
                            echo $data['wickets'];
                        ?>
                    </p>
                    <p>
                        (
                        <?php
                            $sql = "SELECT balls FROM svitcricket WHERE id=1";
                            $result =  mysqli_query($db,$sql);
                            $data = mysqli_fetch_assoc($result);
                            
                            $try = $data['balls'];
                            $bdot = number_format(floor($try/6), 0);
                            echo $bdot;
                            echo '.';
                            $abot = number_format(floor($try%6), 0);
                            echo $abot;
                            
                        ?>
                        overs )
                    </p>
                </div>

                <div class="col-12">
                    <?php
                        $sql = "SELECT name, wickets, runs, balls, overs FROM svitcricket WHERE innings=2";
                        $result =  mysqli_query($db,$sql);
                        $second = mysqli_fetch_assoc($result);
                        $sql = "SELECT name, wickets, runs, balls, overs FROM svitcricket WHERE innings=1";
                        $result =  mysqli_query($db,$sql);
                        $first = mysqli_fetch_assoc($result);
                        $h = $first['runs']-$second['runs']+1;
                        $r = $second['overs']-$second['balls'];
                        if($second['runs']>0)
                        {
                            if($second['runs']==$first['runs'] && $r == 0)
                            {
                                echo "Draw!";
                            }
                            else if($h<=0 && $r >= 0 || $first['wickets']==10)
                            {
                                echo $second['name'];
                                echo " won the match!";
                            }
                            else if($h > 0 && $r == 0 || $second['wickets']==10)
                            {
                                echo $first['name'];
                                echo " won the match!";
                            }
                            else if($second['runs']<=$first['runs'])
                            {
                                echo $second['name'];
                                echo " needs ";
                                echo $h;
                                echo " to win in ";
                                echo $r;
                                echo " balls.";
                            }
                        }
                    ?>
                    
                </div>
            </div>
        </div>
        </div>
        <hr>
        <p class="text-center"> Last Match </p>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <p> <?php echo "Computer won the toss and elected to bat first." ?> </p>
                    <h3> Computer </h3>
                    <p> 121/4 </p>
                    <p> ( 12.0 overs ) </p>
                    <h3> IT </h3>
                    <p> 101/8 </p>
                    <p> ( 12.0 overs ) </p>
                    <p> Computer won the match! </p>
                </div>
            </div>
        </div> 
    </body>
    </html>
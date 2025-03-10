<?php

session_start();

if(!isset($_SESSION['username'])){
header('location:login.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/query.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <title>Kulima Africa</title>
</head>

<body>

    <?php

    include 'dbcon.php';

    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $query = $_POST['problem'];

        $insertquery = " insert into query(name, number, email, problem)  values('$name','$number', '$email', '$query') ";

        $result = mysqli_query($con, $insertquery);


        if($result){
            ?>
            <script>
                alert("Your query has been submitted");
            </script>
            <?php
        }
        else{
            ?>
            <script>
                alert("Not inserted");
            </script>

            <?php
        }
    }

    ?>

    <div class="main-layout">
        <!-- <img src="img/landing_img.jpg" alt="" class="back-img"> -->
        <div class="header">
            <div class="logo">
                <a href="farmer.php"><img src="./img/logo12.png" alt=""></a>
            </div>
            <div class="navbar">
                <div class="site-navbar">
                    <ul>
                        <li><a href="farmer.php">Home</a></li>
                        <li><a class="active" href="query.php">Query</a></li>
                        <li><a href="crop.php">Crops</a></li>
                        <li><a href="sellcrop.php">Sell Crop</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="logout.php">Logout</a></li>

                    </ul>
                </div>
            </div>
        </div>


        <div class="body-layout">

            <div class="heading">
                <h4>YOUR QUERY</h4> 
                <h3>RAISE A QUESTION</h3>
            </div>

            <div class="form">
                <form action="" method="post">
                    <input type="text" name="name" id="name" placeholder="Your Name" required> <br>
                    <input type="number" name="number" id="number" placeholder="Phone Number" required> <br>
                    <input type="email" name="email" id="email" placeholder="Your Email" required> <br>
                    
                    <input type="text" name="problem" id="query" cols="60" rows="6" placeholder="Enter your query here" required></input> <br>
                    <button type="submit" name="submit" id="submit-query">SUBMIT QUERY</button>

                </form>

                

            </div>

        </div>

    </div>

    <div class="footer">
        <p>YOUR QUERY WILL BE SOLVED</p>
    </div>


</body>

</html>
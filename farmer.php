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
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <title>kulima Africa</title>

</head>

<body class="main-layout">


    <div class="layout">
        <div class="header">
            <div class="logo">
                <a href="farmer.php"><img src="./img/logo12.png" alt=""></a>
            </div>
            <div class="navbar">
                <div class="site-navbar">
                    <ul>
                        <li><a class="active" href="farmer.php">Home</a></li>
                        <li><a href="query.php">Query</a></li>
                        <li><a href="crop.php">Crops</a></li>
                        <li><a href="sellcrop.php">Sell Crop</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="logout.php">Logout</a></li>

                    </ul>

                    <!-- <span>&#10162;</span> -->
                </div>
            </div>
        </div>

        <div class="slider-layout">
            <div id="slider">
                <figure>
                    <img src="img/slide1.jpg" alt="">
                    <img src="img/slide2.jpg" alt="">
                    <img src="img/slide3.jpg" alt="">
                    <img src="img/slide4.jpg" alt="">
                    <img src="img/slide1.jpg" alt="">
                </figure>
            </div>
        </div>


        <div class="head-2">
            <h3>Farming related videos</h3>
        </div>

        <div class="video-links">

            <div class="link-1">
            <iframe src="https://www.youtube.com/embed/MIMNRLK804o"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>

            <div class="link-2">
                <iframe src="https://www.youtube.com/embed/J_rB9gsf7DE"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>

            <div class="link-3">
                <iframe  src="https://www.youtube.com/embed/bESWbRmALE8"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>

            <div class="link-4">
                <iframe  src="https://www.youtube.com/embed/clii1U1OChM"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>
        </div>




    </div>



</body>

</html>
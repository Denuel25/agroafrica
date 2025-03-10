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
    <link rel="stylesheet" href="css/crop.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>AgroFarm</title>
</head>

<body>

    <div class="main-layout">
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

        <div class="body_layout">

            <div class="container">
                <h2>Cropping Seasons Of Agriculture</h2>


                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#season1">Kharif Crop Season</a></li>
                    <li><a data-toggle="tab" href="#season2">Rabi Crop Season</a></li>
                    <li><a data-toggle="tab" href="#season3">Zaid Crop Season</a></li>
                </ul>

                <div class="tab-content">
                    <div id="season1" class="tab-pane fade in active">
                        <h3>Kharif Crop Season</h3>
                        <h4>Season Months : June To October</h4>

                         <!-- image grid start -->
                        <div class="image-grid">
                            <div class="polaroid">
                                <img src="crop/jawar.jpg" alt="5 Terre" style="width:100%">
                                <div class="container">
                                    <p>Jawar</p>
                                </div>
                            </div>

                            <div class="polaroid">
                                <img src="crop/rice.jpg" alt="Norther Lights" style="width:100%">
                                <div class="container">
                                    <p>Rice (Paddy)</p>
                                </div>
                            </div>
                            <div class="polaroid">
                                <img src="crop/millet.jpg" alt="5 Terre" style="width:100%">
                                <div class="container">
                                    <p>Millet</p>
                                </div>
                            </div>

                            <div class="polaroid">
                                <img src="crop/corn.jpg" alt="Norther Lights" style="width:100%">
                                <div class="container">
                                    <p>Corn (Maize)</p>
                                </div>
                            </div>
                            <div class="polaroid">
                                <img src="crop/soyabean.jpg" alt="5 Terre" style="width:100%">
                                <div class="container">
                                    <p>Soyabean</p>
                                </div>
                            </div>
                            <div class="polaroid">
                                <img src="crop/turmeric.jpg" alt="5 Terre" style="width:100%">
                                <div class="container">
                                    <p>Turmeric</p>
                                </div>
                            </div>
                            <div class="polaroid">
                                <img src="crop/groundnut.jpg" alt="5 Terre" style="width:100%">
                                <div class="container">
                                    <p>Ground Nut</p>
                                </div>
                            </div>
                            <div class="polaroid">
                                <img src="crop/cotton.jpg" alt="5 Terre" style="width:100%">
                                <div class="container">
                                    <p>Cotton</p>
                                </div>
                            </div>
                            <div class="polaroid">
                                <img src="crop/sugarcane.jpg" alt="5 Terre" style="width:100%">
                                <div class="container">
                                    <p>Sugarcane</p>
                                </div>
                            </div>
                            <div class="polaroid">
                                <img src="crop/green gram.jpg" alt="5 Terre" style="width:100%">
                                <div class="container">
                                    <p>Green Gram(Moong)</p>
                                </div>
                            </div>
                            <div class="polaroid">
                                <img src="crop/seasame(til).jpg" alt="5 Terre" style="width:100%">
                                <div class="container">
                                    <p>Sesame (Till)</p>
                                </div>
                            </div>
                            <div class="polaroid">
                                <img src="crop/toor dal.jpg" alt="5 Terre" style="width:100%">
                                <div class="container">
                                    <p>Arhar (Toor)</p>
                                </div>
                            </div>
                            <div class="polaroid">
                                <img src="crop/black gram.jpg" alt="5 Terre" style="width:100%">
                                <div class="container">
                                    <p>Black Gram</p>
                                </div>
                            </div>
                            <div class="polaroid">
                                <img src="crop/coffee.jpg" alt="5 Terre" style="width:100%">
                                <div class="container">
                                    <p>Coffee</p>
                                </div>
                            </div>
                            <div class="polaroid">
                                <img src="crop/tea.jpg" alt="5 Terre" style="width:100%">
                                <div class="container">
                                    <p>Tea</p>
                                </div>
                            </div>
                            <div class="polaroid">
                                <img src="crop/rubber.jpg" alt="5 Terre" style="width:100%">
                                <div class="container">
                                    <p>Rubber</p>
                                </div>
                            </div>

                        </div>

                    </div>


                    <div id="season2" class="tab-pane">
                        <h3>Rabi Crop Season</h3>
                        <h4>Season Months : November To March</h4>
                        
                        <!-- grid starts -->
                        <div class="polaroid">
                            <img src="crop/jawar.jpg" alt="5 Terre" style="width:100%">
                            <div class="container">
                                <p>Jawar</p>
                            </div>
                        </div>
                        <div class="polaroid">
                            <img src="crop/barley.jpg" alt="5 Terre" style="width:100%">
                            <div class="container">
                                <p>Barley</p>
                            </div>
                        </div>
                        <div class="polaroid">
                            <img src="crop/mustard.jpg" alt="5 Terre" style="width:100%">
                            <div class="container">
                                <p>Mustard</p>
                            </div>
                        </div>
                        <div class="polaroid">
                            <img src="crop/sesame.jpg" alt="5 Terre" style="width:100%">
                            <div class="container">
                                <p>Seasame</p>
                            </div>
                        </div>
                        <div class="polaroid">
                            <img src="crop/peas.jpg" alt="5 Terre" style="width:100%">
                            <div class="container">
                                <p>Peas</p>
                            </div>
                        </div>
                        <div class="polaroid">
                            <img src="crop/oats.jpg" alt="5 Terre" style="width:100%">
                            <div class="container">
                                <p>Oats</p>
                            </div>
                        </div>
                        <div class="polaroid">
                            <img src="crop/linseeds.jpg" alt="5 Terre" style="width:100%">
                            <div class="container">
                                <p>Lineseeds</p>
                            </div>
                        </div>

                    </div>

                    <div id="season3" class="tab-pane">
                        <h3>Zaid Crop Season</h3>
                        <h4>Season Months : March To June</h4>
                        
                        <div class="polaroid">
                            <img src="crop/watermelon.jpg" alt="5 Terre" style="width:100%">
                            <div class="container">
                                <p>Watermelon</p>
                            </div>
                        </div>
                        <div class="polaroid">
                            <img src="crop/cucumber.jpg" alt="5 Terre" style="width:100%">
                            <div class="container">
                                <p>Cucumber</p>
                            </div>
                        </div>
                        <div class="polaroid">
                            <img src="crop/muskmelon.jpg" alt="5 Terre" style="width:100%">
                            <div class="container">
                                <p>Muskmelon</p>
                            </div>
                        </div>
                        <div class="polaroid">
                            <img src="crop/sunflower.jpg" alt="5 Terre" style="width:100%">
                            <div class="container">
                                <p>Sunflower</p>
                            </div>
                        </div>
                        <div class="polaroid">
                            <img src="crop/sugarcane.jpg" alt="5 Terre" style="width:100%">
                            <div class="container">
                                <p>Sugarcane</p>
                            </div>
                        </div>
                        <div class="polaroid">
                            <img src="crop/bittergourd.jpg" alt="5 Terre" style="width:100%">
                            <div class="container">
                                <p>Bitter Gourd</p>
                            </div>
                        </div>
                        <div class="polaroid">
                            <img src="crop/pumpkin.jpg" alt="5 Terre" style="width:100%">
                            <div class="container">
                                <p>Pumpkin</p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>



    </div>

</body>

</html>
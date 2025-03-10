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
    <link rel="stylesheet" href="css/sellcrop.css">
    <title>Kulima Africa</title>
</head>
<body>
    
    <?php

    include 'dbcon.php';

    if(isset($_POST['submit'])){

        $cropname = $_POST['cropname'];
        $number = $_POST['number'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
        $file = $_FILES['file'];

    

        $filename = $file['name'];
        $filepath = $file['tmp_name'];
        $fileerror = $file['error'];

        if($fileerror == 0){
            $destfile = 'upload/'.$filename;
            
            move_uploaded_file($filepath, $destfile);

            $insertquery = " insert into sellcrops(cropname, number, quantity, price, image)  values('$cropname','$number', '$quantity', '$price', '$destfile') ";

        $result = mysqli_query($con, $insertquery);


        if($result){
            ?>
            <script>
                alert("Your crop details are submitted");
            </script>
            <?php
        }
        else{
            ?>
            <script>
                alert("Not submitted");
            </script>

            <?php
        }

        }

        
    }


    ?>

<video src="video/farmvideo.mp4" autoplay muted loop id="video">Your browser does not suppport</video>


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

        <div class="body-ayout">
        
            <div class="form-layout">
                <div class="heading">
                    <h3>Want to sell your crops ?</h3>
                    <h4>Add the details in form </h4>
                </div>

                <div class="form-section">
                    <form action="" method="post" enctype="multipart/form-data">
                        <label for="cropname">Crop Name : </label>
                        <input type="text" name="cropname" id="name"  required> <br>
                        <label for="number">Mobile Number : </label>
                        <input type="number" name="number" id="number"  required> <br>
                        <label for="quantity">Quantity in Kgs : </label>
                        <input type="number" name="quantity" id="quantity" required> <br>
                        <label for="price">Price in Rupees : </label>
                        <input type="number" name="price" id="price"  required> <br>
                        
                        <label for="file">Upload Image : </label>
                        <input type="file" name="file" id="file"  required> <br>
                        <button type="submit" name="submit" id="submit-query">SUBMIT</button>

                    </form>


                </div>
                
            </div>

        </div>


    </div>

    
</body>
</html>
<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/register.css">
    
    <title>Kulima Africa</title>
</head>

<body>


<?php

include 'dbcon.php';

if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $pass = password_hash($password, PASSWORD_BCRYPT);

    $emailquery = " select * from registration where email = '$email' ";
    $query = mysqli_query($con, $emailquery);

    $emailcount = mysqli_num_rows($query);

    if($emailcount>0){
        ?>
        <script>
            alert("Email already exist");
        </script>
        <?php

    }else {
        $insertquery = " insert into registration(username, email, mobile, password) values('$username','$email','$mobile','$pass')";

        $iquery = mysqli_query($con, $insertquery);
        
        if($iquery){
            ?>
            <script>
                alert("Inserted Successful");
            </script>
            <?php
        }
        else{
            ?>
            <script>
                alert("no connection");
            </script>
            <?php
        }
    }

}

?>

    <div class="container">
        <div class="col1">
            <div class="logo">
                <img src="./img/logo12.png" alt="">
            </div>

            <img src="./img/img.png" alt="">

        </div>
        <div class="col2">

            <h3>New to Kulima Africa Create a new account</h3>
            <form action="" method="post">
                <input type="name" name="name" id="register-name" placeholder="Enter Name" required><br>
                <input type="email" name="email" id="register-email" placeholder="Enter Email" required> <br>
                <input type="text" name="mobile" id="register-mobile" placeholder="Enter Number" required> <br>
                <input type="password" name="password" id="register-password" placeholder="Enter Password" required> <br>

                <div class="signup-button">
                    <button type="submit" id="signup-btn" name="submit" class="signup-btn">SIGN UP</button>
                </div>

                <div class="login">
                    <h5>Already a user?</h5>
                    <a href="login.php">Log In</a>
                </div>

            </form>

        </div>
    </div>

</body>

</html>
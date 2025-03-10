<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kulima Africa</title>

    <link rel="stylesheet" type="text/css" href="css/login.css" />

</head>

<body>

<?php

include 'dbcon.php';

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_search = " select * from registration where email = '$email' ";

    $query = mysqli_query($con, $email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count){

        $email_pass = mysqli_fetch_assoc($query);

        $db_pass = $email_pass['password'];

        $_SESSION['username'] = $email_pass['username'];

        $pass_decode = password_verify($password, $db_pass);

        if($pass_decode){
            ?>
        <script>
            alert("Login Successfully !");
            location.replace("farmer.php");
        </script>
        
            <?php
        }
        else{
            ?>
            <script>
                alert("Password is Incorrect");

            </script>
            <?php
        }

    }
    else{
        ?>
        <script>
            alert("Invalid Email");
        </script>
        <?php
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

            <h3>Already a user? <br>
                Login into your account</h3>

            <form action="" method="post">
                <input type="email" name="email" id="login-email" placeholder="Enter Email" required> <br>
                <input type="password" name="password" id="login-password" placeholder="Enter Password" required> <br>

                <div class="login-button">
                    <button type="submit" id="login-btn" name="submit" class="login-btn">LOGIN</button>
                </div>

                <div class="signup">
                    <h5>New to AgroFarm?</h5>
                    <a href="signup.php">Sign Up</a>
                </div>

            </form>

        </div>
    </div>
</body>

</html>
<?php

session_start();

include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
 
     $username = $_POST['username'];
    $password = $_POST['password'];
   

    if (!empty($username) && !empty($password) ) {

        $query = "select * from professional where username = '$username' limit 1";
        $result = mysqli_query($con,$query);

        if($result){
            if($result && mysqli_num_rows($result) > 0){
                $user_data = mysqli_fetch_assoc($result);

                if($user_data['password'] === $password){
                    
                    $_SESSION['id'] = $user_data['id'];
                    header("Location: index.php");
                    die;
                }
            }
        }

        echo "<p>Wrong username or password.</p>";
   
    } else {

        echo "<p>Please enter some valid information.</p>";
    }

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>

<body>

    <main class=" full-width overflow-hidden  position-absolute ">
        <div class="row full-height ">
            <div class="col-3 "></div>
            <div class="col-6 full-height padding-vertical-3 padding-horizontal-5 shadow  ">
                <div class=" row">
                    <div class=" col-12">
                        <img class=" fill-container " src="logo.svg">
                    </div>
                </div>
                <div class=" row">
                    <div class=" col-12">
                        <img class=" fill-container " src="professionalSignIn.svg">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h2 class="header-2">Professional Sign In</h2>
                        <form action="" method="post">
                            <label for="username" class="bold black">Username</label><br>
                            <input type="text" id="username" name="username" placeholder="Enter Username"><br>
                            <label for="password" class="bold black">Password</label><br>
                            <input type="password" id="password" name="password" placeholder="Enter Password">
                            <input class=" bg-accent-hover white-hover fill-container bold padded border-rounded "
                                type="submit" value="Sign In"><br>
                            <p>Don't have an account? <a class="inverse" href="register.php">Register</a> </p>
                        </form>
                    </div>

                </div>

            </div>

        </div>
    </main>



</body>

</html>
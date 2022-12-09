<?php
session_start();

include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $nicnumber = $_POST['nic-number'];
    $mobile = $_POST['mobile'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $niclink = $_POST['niclink'];
    $email = $_POST['email'];
    $occupation = $_POST['occupation'];
    $workplace = $_POST['workplace'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $passwordrepeat = $_POST['password-repeat'];

    if (!empty($username) && !empty($password) ) {

        $query = "insert into professional (firstname, lastname, gender, nicnumber, mobile, dob, address, niclink, email, occupation, workplace, username, password, passwordrepeat ) values ('$firstname', '$lastname', '$gender', '$nicnumber', '$mobile', '$dob', '$address', '$niclink', '$email',' $occupation',' $workplace', '$username', '$password', '$passwordrepeat')";
        mysqli_query($con,$query);

        header("Location: login.php");
        die;
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
    <title>Register | Professional</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <main class="navbar-offset">
        <div class="row">
            <div class="col-5 fill-container justify-content center">
                <img width="374px" height="510px" src="professionalSignIn.svg">
                <div class="margin-top-5">
                    <!-- <button class="">Boarding owner</button><br>
        <button class="">Professional</button>
        <button class="">Student</button> -->

                </div>
            </div>
            <div class="col-7 margin-3 fill-container">
                <form method="post">
                    <div class="row">
                        <div class="col-9">
                            <h1 class="header-1">
                                Create Professional Account
                            </h1>
                            <h2 class="header-2">Personal details</h2>

                            <div class="row">
                                <div class="col-4">
                                    <label class="big" for="firstname">First Name</label>
                                    <input class="margin-top-2" type="text" name="firstname" id="firstname">
                                </div>
                                <div class="col-4">
                                    <label class="big" for="lastname">Last Name</label>
                                    <input class="margin-top-2" type="text" name="lastname" id="lastname">
                                </div>
                                <div class="col-4 fill-container padding-bottom-4">
                                    <!-- gender radio buttons-->
                                    <div class="bold black padding-bottom-2 ">Gender</div>
                                    <input type="radio" name="gender" value="m" id="male" id="" checked>
                                    <label for="male" class="">Male</label>

                                    <input type="radio" name="gender" value="f" id="female" id="">
                                    <label for="female" class="">Female</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="col-3 bg-grey-hover border-circle padding-5">
                                <i data-feather="image" class="white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <label class="big" for="nic-number">NIC Number</label>
                            <input class="margin-top-2" type="text" name="nic-number" id="nic-number">
                        </div>
                        <div class="col-4">
                            <label class="big" for="mobile">Mobile Number</label>
                            <input class="margin-top-2" type="text" name="mobile" id="mobile">
                        </div>
                        <div class="col-4">
                            <label class="big" for="dob">Date of Birth</label>
                            <input class="margin-top-2" type="date" name="dob" id="dob">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 fill-container">
                            <div>
                                <label class="big" for="address">Address</label>
                                <input class="margin-top-2" type="text" name="address" id="address">
                            </div>
                        </div>
                        <div class="col-6" style="margin-right: 30%;">
                            <label class="big" for="niclink">NIC Upload Link</label>
                            <input class="margin-top-2" type="text" name="niclink" id="niclink">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <label class="big" for="email">E-mail Address</label>
                            <input class="margin-top-2" type="text" name="email" id="email">
                        </div>
                        <div class="col-4">
                            <label class="big" for="occupation">Occupation</label>
                            <input class="margin-top-2" type="text" name="occupation" id="occupation">
                        </div>
                        <div class="col-4">
                            <label class="big" for="workplace">Work Place</label>
                            <input class="margin-top-2" type="text" name="workplace" id="workplace">
                        </div>
                    </div>
                    <div class="header-2">Login Credentials</div><br>
                    <div class="row">
                        <div class="col-4">
                            <label class="big" for="username">Username</label>
                            <input class="margin-top-2" type="text" name="username" id="username">
                        </div>
                        <div class="col-4">
                            <label class="big" for="password">Password</label>
                            <input class="margin-top-2" type="password" name="password" id="password">
                        </div>
                        <div class="col-4">
                            <label class="big" for="password-repaet">Re-Type Password</label>
                            <input class="margin-top-2" type="password" name="password-repeat" id="repassword">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-9">
                            <input type="checkbox" id="agreement" name="agreement" value="True">
                            I agree to all <a class="inverse">Terms</a> and <a class="inverse">Privacy Policy</a><br>
                            Already have an account? <a class="inverse" href="login.php">Sign In</a>
                        </div>
                    </div>
                    <br>
                    <div class="row ">
                        <div class="col-4"></div>
                        <div class="col-4 fill-container">
                            <input class=" fill-container padding-5 bg-blue-hover white-hover border-rounded"
                                type="submit" value="Create Account">
                        </div>

                    </div>
                </form>
            </div>
    </main>





</body>

</html>
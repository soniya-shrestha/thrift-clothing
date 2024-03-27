<?php ob_start(); ?>
<?php include "./include/dbconn.php" ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/signup.css">
    <!-- Include Font Awesome from a CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- logo -->
    <link rel="icon" href="./assets/img/icon.jpg" type="icon type">
    <title>Sign Up Page</title>
    <script>
        function validateEmail() {
            var email = document.getElementById("email").value;
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+\.com$/i;
            if (emailRegex.test(email)) {
                alert("Valid email address!");
            } else {
                alert("Invalid email address!");
            }
        }
    </script>
</head>

<body>
    <div class="container" style="color: #fff;">
        <nav class="row rounded">
            <ul class="row">
                <li><a href="index.php"><i class='fas fa-home'></i> Back To Home</a></li>
            </ul>

            <ul class="row">
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
        <div class="products rounded col">
            <h1>Thrift Clothing</h1>


            <!-- Login Box -->
            <div class="loginbox rounded signup">
                <h2>Sign Up</h2>
                <form action="#" method="POST"><br>
                    <input type="text" id="name" name="name" placeholder="Enter  Name" style="color: #000;" required>

                    <input type="email" id="email" name="email" placeholder="Enter Email" style="color: #000;" required>
                    <input type="password" id="pass" name="password" placeholder="Enter Password" style="color: #000;" required>
                    <input type="text" id="add" name="address" placeholder="Enter Address" style="color: #000;" required>
                    <button type="submit" class="btn rounded" name="reg_user" onclick="validateEmail()">Sign Up</button><br><br>
                </form>
                <?php
                if (isset($_POST['reg_user'])) {
                    $pwd = $_POST['password'];
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $add = $_POST['address'];

                    $duplicate = mysqli_query($connection, "select * from users where  email='$email'");
                    if (mysqli_num_rows($duplicate) > 0) {
                        echo "<script>
                        alert('Email Already Exists');
                        window.location = 'http://localhost/thrift-clothing/signup.php';
                        </script>";
                    } else {
                        $add_query = "INSERT INTO `users` (`user_id`, `password`,`name`, `email`,`address`) VALUES ('','$pwd', '$name', '$email', '$add');";
                        $sdd_stmt = mysqli_query($connection, $add_query);
                        echo "<script>
                        alert('Registered Sucessfuly');
                        window.location = 'http://localhost/thrift-clothing/login.php';
                        </script>";
        
                    }
                }
                ?>
            </div>
        </div>

        <br><br>
        <?php include "./include/footer.php" ?>
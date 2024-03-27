<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/login.css">
    <!-- Include Font Awesome from a CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

      <!-- logo -->
      <link rel="icon" href="./assets/img/logo.jpg" type="icon type">
    <title>Login Page</title>
</head>

<body>
    <div class="container">
        <nav class="row rounded">
            <ul class="row">
                <li><a href="index.php"><i class='fas fa-home'></i> Back To Home</a></li>
            </ul>

            <ul class="row">
                <li><a href="signup.php">Sign Up</a></li>
            </ul>
        </nav>
        <div class="products rounded col">
        <h1>Thrift Clothing</h1><br>
        <p>Quality with Reasonability</p>
            <!-- Login Box -->
            <div class="loginbox rounded">
                <h2>Login In</h2>
                <form action="./include/login.php" method="POST"><br>
                    <input type="email" id="user" name="email" placeholder="Enter Email" style="color: #000;" required>
                    <input type="password" id="pass" name="password" placeholder="Enter Password" style="color: #000;" required  >
                    <button type="submit" class="btn rounded" name="login">Login</button><br><br>
                    <a href="signup.php">Don't have an account?<b style="color:blue;"> Sign Up</b> </a>
                </form>
                

            </div>
        </div>

        <br><br>
        <?php include "./include/footer.php" ?>
</body>

</html>
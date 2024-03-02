<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/signup.css">
      <!-- logo -->
      <link rel="icon" href="./assets/img/logo.jpg" type="icon type">
    <title>Login Page</title>
</head>

<body>
    <div class="container"style="color: #fff;">
        <nav class="row rounded">
            <ul class="row">
                <li><a href="index.php">Back To Home</a></li>
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
                    <input type="email" id="user" name="email" placeholder="Enter Email" style="color: #fff;" required>
                    <input type="password" id="pass" name="password" placeholder="Enter Password" style="color: #fff;" required  >
                    <button type="submit" class="btn rounded" name="login">Login</button><br><br>
                    <a href="signup.php">Don't have an account. Sign Up</a>
                </form>
                

            </div>
        </div>

        <br><br>
        <?php include "./include/footer.php" ?>
</body>

</html>
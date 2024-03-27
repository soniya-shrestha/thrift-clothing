
<?php
if (isset($_POST['reg_user'])) {
    $pwd = $_POST['password'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $add = $_POST['address'];

    $duplicate = mysqli_query($connection, "select * from users where  email='$email'");
    if (mysqli_num_rows($duplicate) > 0) {
        echo "<script>
        alert('Error Adding Product');
        window.location = 'http://localhost/thrift-clothing/signup.php';
        </script>";
        header("Location: ../signup.php");
    } else {
        $add_query = "INSERT INTO `users` (`user_id`, `password`,`name`, `email`,`address`) VALUES ('','$pwd', '$name', '$email', '$add');";
        $sdd_stmt = mysqli_query($connection, $add_query);
        echo "<script>
        alert('Product Added Sucessfully');
        </script>";
        header("Location: ../login.php");
    }
}
?>

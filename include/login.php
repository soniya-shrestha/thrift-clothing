<?php ob_start(); ?>
<?php include "./dbconn.php" ?>
<?php session_start(); error_reporting(0); 
echo $_SESSION['email'];?>
<?php
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE email = '{$email}'";
    $stmt = mysqli_query($connection, $query);
    if (!$stmt) {
        die('Error' . mysqli_error($connection));
    }
    while ($row = mysqli_fetch_assoc($stmt)) {
        $db_user_id = $row['user_id'];
        $db_name = $row['name'];
        $db_address = $row['address'];
        $db_password = $row['password'];
        $db_email = $row['email'];
        $db_role = $row['role'];
    }
    if ($db_email === $email && $db_password === $password) {
        $_SESSION['email'] = $db_email;
        $_SESSION['user_id'] = $db_user_id;
        $_SESSION['address'] = $db_address;
        $_SESSION['name'] = $db_name;
        $_SESSION['phonenumber'] = $db_phonenumber;
        $_SESSION['role'] = $db_role;
        $_SESSION['email'] = $_POST['email'];
            header("Location: ../admin");
        } else
            echo "<script>
        alert('Invalid Email/Password');
        window.location = 'http://localhost/thrift-clothing/login.php';
        </script>";
    }

?>
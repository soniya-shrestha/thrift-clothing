<?php session_start(); ?>
<?php
    $_SESSION['user_id'] = null;
    $_SESSION['username'] = null;
    $_SESSION['firstname'] = null;
    $_SESSION['lastname'] = null;
    $_SESSION['email'] = null;
    $_SESSION['phonenumber'] = null;
    $_SESSION['address'] = null;
    $_SESSION['role'] = null;
    header("Location: ../index.php");
?> 
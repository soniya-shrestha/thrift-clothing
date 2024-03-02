<?php include "../include/dbconn.php" ?>
<?php ob_start(); ?>
<?php session_start(); ?>
<?php 
    if(!isset($_SESSION['user_id'])) {
        header("Location: ../index.php");
    } else {
        if($_SESSION['role'] !== 'admin') {
            header("Location: ../homepage.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style/admin.css">
    <link rel="stylesheet" href="./assets/style/categories.css">
     <!-- logo -->
     <link rel="icon" href="./assets/img/logo.png" type="icon type">
    <title>Thrift Clothing || Admin </title>
</head>
<body>
    
<?php session_start(); ?>
<nav class="row rounded">
            <ul class="row">
            <li style="color:#fff;">Thrift Clothing</li>
                <li><a href="index.php">Home</a></li>
            </ul>

            <?php 
                if(!isset($_SESSION['user_id'])) {
                    ?>
                    <ul class="row">
                        <li><a href="./login.php">Login</a></li>
                        <li><a href="./signup.php">Sign Up</a></li>
                    </ul>
            <?php
                } else {
                    
                    if(isset($_SESSION['user_id'])) {
                        ?>
                        <ul class="row">
                        <li><a href="#">You are logged in as <?php echo $_SESSION['name'] ?></a></li>
                        <li><a href="./include/logout.php">Logout</a></li>
                    </ul>
                    
                    <?php
                    }
                }
            ?>
        </nav>
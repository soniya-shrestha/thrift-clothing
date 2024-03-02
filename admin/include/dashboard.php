<?php include "../include/dbconn.php" ?>
<?php include "./header.php" ?>
<?php include "./nav.php" ?>
<div class="admin_body row"  >
    <?php include "./sidebar.php" ?>
    <div style="margin:5px;width:100%;background-color:#a19d9b;font-size:18px "> <br><br>
    <h1 style="padding: 10px;">All Users Detail:</h1><br> 
    <div class="table"style="margin:0px 25px;background-color:#a19d9b; ">
        <table style="font-size: 18px;margin:auto; color:#fff;">
            <tr style="color: #000;">
                
                <th>Name</th> 
                <th>Address</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php 
                $query = "SELECT * FROM users";
                $stmt = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($stmt)) {
                    $userid = $row['user_id'];
                    $name = $row['name'];
                    $password = $row['password'];
                    $address = $row['email'];
                    $email = $row['address'];
                    echo "<tr>";
                    echo "<td>$name</td>";
                    echo "<td>$email</td>";
                    echo "<td>$address</td>";
                    echo "<td><a href='users.php?del_post={$userid}'>Delete</a>";
                    echo "</tr>";
              }
            ?>
        </table>
        <?php 
            if(isset($_GET['del_post'])) {
                $del_post = $_GET['del_post'];
                $del_query = "DELETE FROM users WHERE user_id = $del_post";
                $del_stmt = mysqli_query($connection, $del_query);
                header("Location: ./users.php");
            }
        ?>
        </div><br>
        <h1 style="padding: 10px;">All Categories:</h1>
        <div class="table" style="margin: 25px;">
            <table style="  color:#fff;">
                <tr style="color: #000;">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                <?php
                $query = "SELECT * FROM categories";
                $stmt = mysqli_query($connection, $query);
                if (!$stmt) {
                    die('Error');
                }
                while ($row = mysqli_fetch_assoc($stmt)) {
                    $cate_id = $row['cate_id'];
                    $cate_name = $row['cate_name'];

                    echo "<tr>";
                    echo "<td> $cate_id</td>";
                    echo "<td>$cate_name</td>";
                    echo "<td><a href='adminviewcategory.php?del_post={$cate_id}'>Delete</a>";
                    echo "</tr>";
                }
                ?>
            </table>
            <?php
            if (isset($_GET['del_post'])) {
                $del_post = $_GET['del_post'];
                $del_query = "DELETE FROM categories WHERE cate_id = $del_post";
                $del_stmt = mysqli_query($connection, $del_query);
                header("Location: ./adminviewcategory.php");
            }
            ?>
        </div>
        <a href="http://localhost/thrift-clothing/admin/product.php"><h1  style="padding: 10px;">All Products Details:</h1>    </a>
    </div>
    </div>
</div>
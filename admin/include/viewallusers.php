<div class="view_product">
    <h1 style="font-size: 30px;">All Users</h1>
    <div class="table">
        <table style="font-size: 18px;background-color: honeydew;">
            <tr>
                
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
                    echo "<td><a style='color:red;' href='users.php?del_post={$userid}'><i class='fas fa-trash'></i></a>";
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
    </div>
</div>
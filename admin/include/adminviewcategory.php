<?php include "../include/dbconn.php" ?>
<?php include "./header.php" ?>
<?php include "./nav.php" ?>

<div class="admin_body row" >
    <?php include "./sidebar.php" ?>
    <div class="view_category" style="margin:5px; width:100%;background-color: #C4C4C4;">
        <h1 style="padding: 10px;">All Category</h1><br>
        <div class="table" style="margin:20px ;">
            <table style=" font-size:22px;margin:px; color:#fff;">
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
    </div>



</div>
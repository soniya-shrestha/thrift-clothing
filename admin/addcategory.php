<?php include "../include/dbconn.php" ?>
<?php include "./header.php" ?>
<?php include "./nav.php" ?>
<div class="admin_body row" >
    <?php include "./sidebar.php" ?>
    <div class="loginbox  add_category" style="rgb(141, 141, 101); margin-top:50px;" >
        <h2>Add Category</h2>
        <?php
        if (isset($_POST['addproduct'])) {
            $name = $_POST['category_name'];
            $add_cate = "INSERT INTO categories(cate_name) VALUES ('$name')";
            $add_stmt = mysqli_query($connection, $add_cate);
            if ($add_cate) {
                echo "<script>
                 alert('Category Added Sucessfully');
                 window.location = 'http://localhost/thrift-clothing/admin/adminviewcategory.php';
            </script>";
            } else {
                echo "<script>
            alert('Error Adding Category');
           
            </script>";  } 
        }
        ?>
        <form action="#" method="POST"><br>
            <input type="text" name="category_name" placeholder="Category Name" required><br>
            <button type="submit" class="btn rounded" name="addproduct">Add Category</button><br><br>
        
        </form>
      
    </div>
</div>
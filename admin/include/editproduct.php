<div class="view_product">
    <div class="loginbox rounded">
        <h2>Edit Product</h2>
        <?php
        if (isset($_GET['p_id'])) {
            $id = $_GET['p_id'];
            $view_query = "SELECT * FROM products WHERE product_id = $id";
            $view_stmt = mysqli_query($connection, $view_query);
            while ($view_row = mysqli_fetch_assoc($view_stmt)) {
                $product_name = $view_row['product_name'];
                $product_image = $view_row['product_image'];
                $product_price = $view_row['product_price'];
        ?>
                <form action="#" method="POST"><br>
                    <input type="text" id="fullname" name="title" value="<?php echo $product_name ?>">
                    <select name="category_id" style="color:#fff; background-color:#a19d9d;">
                        <?php
                        $query = "SELECT * FROM categories";
                        $stmt = mysqli_query($connection, $query);
                        while ($row = mysqli_fetch_assoc($stmt)) {
                            $cate_id = $row['cate_id'];
                            $cate_name = $row['cate_name'];
                            echo "<option value='$cate_id'>$cate_name</option>";
                        }
                        ?>

                    </select>
                    <input type="text" id="user" name="price" value="<?php echo $product_price ?>">
                    <button type="submit" class="btn rounded" name="updateproduct">Update Product</button><br><br>
                </form>
        <?php
            }
        }
        ?>
        <?php
        if (isset($_POST['updateproduct'])) {
            $name = $_POST['title'];
            $categoryid = $_POST['category_id'];
            $price = $_POST['price'];
            $image = $_POST['image'];
            $update_query = "UPDATE products SET product_cate_id = '$categoryid', product_name = '$name', product_price = '$price' WHERE product_id = $id";
            $update_stmt = mysqli_query($connection, $update_query);
            header("Location: ./product.php");
        }
        ?>
    </div>
</div>
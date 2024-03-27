<div class="view_category">
    <div class="loginbox rounded">
    <h2>Add Product</h2>
        <form action="#" method="POST" enctype="multipart/form-data"><br>
            <input type="text" id="fullname" name="title" placeholder="Product Title" required>
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
            <input type="text" id="user" name="price" placeholder="Product Price" required>
            <input type="file" id="image" name="image" required><br>
            <select name="type" id="" style="color:#fff; background-color:#a19d9d;">
            <option value="main">Newly Added </option>
                <option value="restocked">Women</option>
                <option value="printed">Men</option>
                <option value="topselling">Kids</option>
            </select><br><br>
            <button type="submit" class="btn rounded" name="addproduct">Add Product</button><br><br>
        </form>
        <?php
        if (isset($_POST['addproduct'])) {
            $name = $_POST['title'];
            $categoryid = $_POST['category_id'];
            $price = $_POST['price'];
            $type = $_POST['type'];
            $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
           
           
        //    Product div main div Newly added Products
            if ($type === 'main') {
                $add_query = "INSERT INTO `products` (`product_id`, `product_cate_id`, `product_name`, `product_image`, `product_price`) VALUES (NULL, '$categoryid', '$name', '$file', '$price');";
                $sdd_stmt = mysqli_query($connection, $add_query);
                if ($add_query) {
                    echo "<script>
                     alert('Product Added Sucessfully');
                     window.location = 'http://localhost/thrift-clothing/admin/product.php?source=add_product';
                </script>";
                } else {
                    echo "<script>
                alert('Error Adding Product');
                window.location = 'http://localhost/thrift-clothing/admin/product.php?source=add_product';
                </script>";
                }
            }
            
            else if($type === 'topselling') {
                $add_query = "INSERT INTO `slide1data` (`product_id`, `product_cate_id`, `product_name`, `product_image`, `product_price`) VALUES (NULL, '$categoryid', '$name', '$file', '$price');";
                $sdd_stmt = mysqli_query($connection, $add_query);
                if ($add_query) {
                    echo "<script>
                     alert('Product Added Sucessfully');
                     window.location = 'http://localhost/thrift-clothing/admin/product.php?source=add_product';
                </script>";
                } else {
                    echo "<script>
                alert('Error Adding Product');
                window.location = 'http://localhost/thrift-clothing/admin/product.php?source=add_product';
                </script>";
                }

                //Printed Product slide2data
            } else if($type === 'printed') {
                $add_query = "INSERT INTO `slide2data` (`product_id`, `product_cate_id`, `product_name`, `product_image`, `product_price`) VALUES (NULL, '$categoryid', '$name', '$file', '$price');";
                $sdd_stmt = mysqli_query($connection, $add_query);
                if ($add_query) {
                    echo "<script>
                     alert('Product Added Sucessfully');
                     window.location = 'http://localhost/thrift-clothing/admin/product.php?source=add_product';
                </script>";
                } else {
                    echo "<script>
                alert('Error Adding Product');
                window.location = 'http://localhost/thrift-clothing/admin/product.php?source=add_product';
                </script>";
                }
            }
            // Restocked Product slide3data
            else if($type === 'restocked') {
                $add_query = "INSERT INTO `slide3data` (`product_id`, `product_cate_id`, `product_name`, `product_image`, `product_price`) VALUES (NULL, '$categoryid', '$name', '$file', '$price');";
                $sdd_stmt = mysqli_query($connection, $add_query);
                if ($add_query) {
                    echo "<script>
                     alert('Product Added Sucessfully');
                     window.location = 'http://localhost/thrift-clothing/admin/product.php?source=add_product';
                </script>";
                } else {
                    echo "<script>
                alert('Error Adding Product');
                window.location = 'http://localhost/thrift-clothing/admin/product.php?source=add_product';
                </script>";
                }
            }
            
        }
        ?>
    </div>
</div>
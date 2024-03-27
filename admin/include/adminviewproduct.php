<div class="view_product">
    <h1 style="font-size: 30px;">All Products</h1><br>
    <h2>Newly Added Product Data</h2>
    <br>
    <div class="table">
        <table style="font-size: 18px;background-color: honeydew;">
            <tr style="height: 10px;">
                <th>Product Title</th>
                <th>Category</th>
                <th>Image</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            <?php 
                $query = "SELECT * FROM products";
                $stmt = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($stmt)) {
                    $pr_id = $row['product_id'];
                    $name = $row['product_name'];
                    $id = $row['product_cate_id'];
                    $image = $row['product_image'];
                    $price = $row['product_price'];
                    echo "<tr>";
                    echo "<td>$name</td>";
                    echo "<td>$id</td>"; ?>
                    <td> <?php echo '<img src="data:image;base64,' . base64_encode($row['product_image']) . '">'; ?> </td>
                    <?php
                    echo "<td>$price</td>";
                    echo "<td><a style='color:green;' href='product.php?source=edit_product&p_id={$pr_id}'><i class='fas fa-edit'></i></a> /  <a style='color:red;' href='product.php?del_post={$pr_id}'><i class='fas fa-trash'></i></a>";
                    echo "</tr>";
              }
            ?>
        </table>
        <?php 
            if(isset($_GET['del_post'])) {
                $del_post = $_GET['del_post'];
                $del_query = "DELETE FROM products WHERE product_id = $del_post";
                $del_stmt = mysqli_query($connection, $del_query);
                header("Location: ./product.php");
            }
        ?>
    </div>
<br>
    <!-- Slide1data-->
    <h2>kids Products Data</h2>
    <br>
    <div class="table">
        <table style="font-size: 18px;background-color: honeydew;">
            <tr>
                <th>Product Title</th>
                <th>Category</th>
                <th>Image</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            <?php 
                $query = "SELECT * FROM slide1data";
                $stmt = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($stmt)) {
                    $pr_id = $row['product_id'];
                    $name = $row['product_name'];
                    $id = $row['product_cate_id'];
                    $image = $row['product_image'];
                    $price = $row['product_price'];
                    echo "<tr>";
                    echo "<td>$name</td>";
                    echo "<td>$id</td>";?>
                    <td> <?php echo '<img src="data:image;base64,' . base64_encode($row['product_image']) . '">'; ?> </td>
                    <?php
                    echo "<td>$price</td>";
                    echo "<td><a style='color:red;' href='product.php?del_post={$pr_id}'><i class='fas fa-trash'></i></a>";
                    echo "</tr>";
              }
            ?>
        </table>
        <?php 
            if(isset($_GET['del_post'])) {
                $del_post = $_GET['del_post'];
                $del_query = "DELETE FROM slide1data WHERE product_id = $del_post";
                $del_stmt = mysqli_query($connection, $del_query);
                header("Location: ./product.php");
            }
        ?>
    </div>
<br>
        <!-- Slide2data-->
        <br>
        <h2>Men Product Data</h2>
    <br>
    <div class="table">
        <table style="font-size: 18px;background-color: honeydew;">
            <tr>
                <th>Product Title</th>
                <th>Category</th>
                <th>Image</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            <?php 
                $query = "SELECT * FROM slide2data";
                $stmt = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($stmt)) {
                    $pr_id = $row['product_id'];
                    $name = $row['product_name'];
                    $id = $row['product_cate_id'];
                    $image = $row['product_image'];
                    $price = $row['product_price'];
                    echo "<tr>";
                    echo "<td>$name</td>";
                    echo "<td>$id</td>";?>
                    <td> <?php echo '<img src="data:image;base64,' . base64_encode($row['product_image']) . '">'; ?> </td>
                    <?php
                    echo "<td>$price</td>";
                    echo "<td> <a style='color:red;' href='product.php?del_post={$pr_id}'><i class='fas fa-trash'></i></a>";
                    echo "</tr>";
              }
            ?>
        </table>
        <?php 
            if(isset($_GET['del_post'])) {
                $del_post = $_GET['del_post'];
                $del_query = "DELETE FROM slide2data WHERE product_id = $del_post";
                $del_stmt = mysqli_query($connection, $del_query);
                header("Location: ./product.php");
            }
        ?>
    </div><br>
        <!-- Slide1data-->
        <h2> Women Products Data</h2>
    <br>
    <div class="table">
        <table style="font-size: 18px;background-color: honeydew;">
            <tr>
                <th>Product Title</th>
                <th>Category</th>
                <th>Image</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            <?php 
                $query = "SELECT * FROM slide3data";
                $stmt = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($stmt)) {
                    $pr_id = $row['product_id'];
                    $name = $row['product_name'];
                    $id = $row['product_cate_id'];
                    $image = $row['product_image'];
                    $price = $row['product_price'];
                    echo "<tr>";
                    echo "<td>$name</td>";
                    echo "<td>$id</td>";?>
                    <td> <?php echo '<img src="data:image;base64,' . base64_encode($row['product_image']) . '">'; ?> </td>
                    <?php
                    echo "<td>$price</td>";
                    echo "<td> <a style='color:red;' href='product.php?del_post={$pr_id}'><i class='fas fa-trash'></i></a>";
                    echo "</tr>";
              }
            ?>
        </table>
        <?php 
            if(isset($_GET['del_post'])) {
                $del_post = $_GET['del_post'];
                $del_query = "DELETE FROM slide3data WHERE product_id = $del_post";
                $del_stmt = mysqli_query($connection, $del_query);
                header("Location: ./product.php");
            }
        ?>
    </div>
</div>
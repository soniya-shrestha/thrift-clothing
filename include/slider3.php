<div class="products rounded  ">
            <h1>Restocked</h1>
    <div class="slider">
            <div class="slides rounded">
            <?php
            $query = "SELECT * FROM slide3data";
            $stmt = mysqli_query($connection,$query);
            while($row = mysqli_fetch_assoc($stmt)) {
                $product_id = $row['product_id'];
                $product_title = $row['product_name'];
                $product_price = $row['product_price'];
                $product_image = $row['product_image'];
          ?>  
            <div id="slide col">
                <div class="img_div">    
                <?php echo '<img src="data:image;base64,' . base64_encode($row['product_image']) . '">'; ?> 
                </div>
                <div class="description">
                <h3><?php echo $product_title ?></h3>
                <h3>Price: <?php echo $product_price ?></h3><br>
                <a class="btn rounded" href="addtocart.php?&name=slide3data&p_id=<?php echo $product_id ?>"> <button type="submit" class="btn rounded"  name="buy">Buy</button></a><br>
                </div>
            </div>  
    <?php
        }
    ?>
    </div>
    </div>
    </div>
      

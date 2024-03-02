<?php include "./include/header.php" ?>
<?php session_start();
error_reporting(0);

if (isset($_SESSION['user_id'])) {

?>
    <style>
        .slides {
            width: fit-content;
            display: flex;
            padding: 10px;
            background-color: #474747;
        }
    </style>

    <body>

        <div class="container">
            <?php include "./include/nav.php" ?>
            <div class="products rounded">
                <div class="slider">
                    <div class="slides rounded">
                        <?php
                        if (isset($_GET['p_id']) && isset($_GET['name'])) {
                            $db_name = $_GET['name'];
                            $product_id = $_GET['p_id'];
                            $query = "SELECT * FROM $db_name WHERE product_id = {$product_id}";
                            $stmt = mysqli_query($connection, $query);
                            if (!$stmt) {
                                die('Error' . mysqli_error($stmt));
                            }
                            while ($row = mysqli_fetch_assoc($stmt)) {
                                $product_id = $row['product_id'];
                                $product_title = $row['product_name'];
                                $product_price = $row['product_price'];
                                $product_image = $row['product_image'];
                        ?>
                                <div class="img_div">

                                    <?php echo '<img src="data:image;base64,' . base64_encode($row['product_image']) . '">' ?>

                                </div><br>

                                <div class="description" style="color:#fff">
                                    <form target="_blank" class="myForm" action="https://sandbox.paypal.com/cgi-bin/webscr" method="post">
                                        <h3><?php echo $product_title ?></h3><br>
                                        <h3>Quantity: <input type="number" id="quantity" oninput="price();" value="1" class="btn" name="quantity" max="50" min="1" required style="padding: 5px;"></h3>
                                        <br>
                                        <h3>$<span class="amount" id="amount"><?php echo $product_price ?></span></h3>
                                        <input type="hidden" name="" id="" value="">
                                        <br>

                                        <!-- Identify your business so that you can collect the payments. -->
                                        <input type="hidden" name="business" value="sb-fbxef5964245@business.example.com">

                                        <!-- Specify a Buy Now button. -->
                                        <input type="hidden" name="cmd" value="_xclick">

                                        <!-- Specify details about the item that buyers will purchase. -->
                                        <input type="hidden" name="item_name" value="<?php echo $product_title ?>">
                                        <input type="hidden" id="quantity_again" name="amount" value="<?php echo $product_price ?>">
                                        <input type="hidden" name="currency_code" value="USD">
                                        <input type="hidden" name="undefined_quantity" id="totalquantity" value="">

                                        <!-- Display the payment button. -->
                                        <button class="btn" name="submit">Buy Now</button>

                                    </form>
                                    <br>
                                    <script>
                                        function price() {
                                            var price = document.getElementById('quantity').value;
                                            document.getElementById('totalquantity').value = price;
                                            document.getElementById('amount').innerHTML = price * <?php echo $product_price ?>
                                        }
                                    </script>


                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <br>
            <?php include "./include/footer.php" ?>
        <?php } else {
        echo "<script>
        alert('You must Login!!');
        window.location = 'login.php';
        </script>";
    } ?>
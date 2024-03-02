<?php include "../include/dbconn.php" ?>
<?php include "./header.php" ?>
<?php include "./nav.php" ?>
<div class="admin_body row">
    <?php include "./sidebar.php" ?>
    <div class="page_section">
    <?php 
        if(isset($_GET['source'])) {
            $source = $_GET['source'];
        } else {
            $source = '';
        }
        switch($source) {
            case 'add_product':
                include "./include/addproduct.php";
                break;
            case 'edit_product':
                include "./include/editproduct.php";
                break;
            default:
                include "./include/adminviewproduct.php";
        }
    ?>
    </div>
</div>
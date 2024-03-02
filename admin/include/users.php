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
            default:
                include "./include/viewallusers.php";
        }
    ?>
    </div>
</div>
<?php include "./footer.php" ?>
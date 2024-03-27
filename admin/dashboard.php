<?php include "../include/dbconn.php" ?>
<?php include "./header.php" ?>
<?php include "./nav.php" ?>
<div class="admin_body row"  >
    <?php include "./sidebar.php" ?>
    <div style="margin:5px;width:100%;background-color:beige;font-size:18px "> <br><br>

    <div class="row">
        <div class="col">
            <div class="card card-1" >
                <div class="card-content">
                    <div class="box" >
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                    <h6 class="card-text"><a href="http://localhost/thrift-clothing/admin/users.php">Total Users</a></h6>
                </div>
            </div>
        </div>

        <div class="col">
        <div class="card card-2" >
                <div class="card-content">
                    <div class="box" style="display: flex; border-radius: 10px; background: #F2F6FD; padding: 22px;position: absolute; left: 825px; top:200px;transform: translate(-50%, -50%);">
                        <div class="icon">
                            <i class="fas fa-list"></i>
                        </div>
                    </div>
                    <h6 class="card-text"><a href="http://localhost/thrift-clothing/admin/product.php">Total Products</a></h6>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-3" >
                <div class="card-content">
                    <div class="box" style="display: flex; border-radius: 10px; background: #F2F6FD; padding: 22px;position: absolute; left: 1275px; top:200px;transform: translate(-50%, -50%);">
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                    <h6 class="card-text"><a href="http://localhost/thrift-clothing/admin/adminviewcategory.php">Total Category</a></h6>
                </div>
            </div>
        </div>
    </div>

        

        

      
 
    </div>
    </div>
</div>
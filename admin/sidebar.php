<div class="admin_controls ">
    <div class="nav-links col">
        <a href="dashboard.php" style= "color: #864AF9;"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <hr>
        <button type="button" class="collapsible row" style= "color: #864AF9;">Products</button>
		<div class="content">
  			<div class="collapse-links col">
                <a href="./product.php" style= "color: #864AF9;"><i class="fas fa-eye"></i>  View All Products</a>
                <a href="./product.php?source=add_product" style= "color: #864AF9;"><i class="fas fa-plus"></i>  Add Product</a>
   			</div>
		</div>
    
        <hr>
        <button type="button" class="collapsible row" style= "color: #864AF9;">Categories</button>
		<div class="content">
  			<div class="collapse-links col">
                <a href="./adminviewcategory.php" style= "color: #864AF9;"><i class="fas fa-eye"></i>  View All Categories</a>
                <a href="./addcategory.php?source=add_category" style= "color: #864AF9;"><i class="fas fa-plus"></i>  Add Categories</a>
   			</div>
		</div>
    
        <!-- <a href="./categories.php">Categories</a> -->
        <hr>
        <a href="./users.php" style= "color: #864AF9;"><i class="fas fa-users"></i>  View All Users</a>
    </div>
</div>
<script>
    var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
      expand.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
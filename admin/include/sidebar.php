<div class="admin_controls">
    <div class="nav-links col">
        <a href="dashboard.php">Dashboard</a>
        <hr>
        <button type="button" class="collapsible row" style= "color: #fff;">Products<span>+</span></button>
		<div class="content">
  			<div class="collapse-links col">
                <a href="./product.php">View All Products</a>
                <a href="./product.php?source=add_product">Add Product</a>
   			</div>
		</div>
    
        <hr>
        <button type="button" class="collapsible row" style= "color: #fff;">Categories<span>+</span></button>
		<div class="content">
  			<div class="collapse-links col">
                <a href="./adminviewcategory.php">View All Categories</a>
                <a href="./addcategory.php?source=add_category">Add Categories</a>
   			</div>
		</div>
    
        <!-- <a href="./categories.php">Categories</a> -->
        <hr>
        <a href="./users.php">View All Users</a>
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
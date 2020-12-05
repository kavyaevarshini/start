<?php 
session_start();

include('templates/header.php');
include('templates/nav.php');
?>
 
<div class="container">
 
	<div class="row">
	  <div class="col-sm-6 col-md-3">
	    <div class="thumbnail">
	      <img src="image.png" alt="image title">
	      <div class="caption">
	        <h3>Product Name</h3>
	        <p>Product Description</p>
	        <p>$100</p>
	        <p><a href="addtocart.php" class="btn btn-primary" role="button">Add to Cart</a></p>
	      </div>
	    </div>
	  </div>
	</div>
 
</div>
 
<?php include('templates/footer.php');


$sql = "SELECT * FROM products";
$res = mysqli_query($connection, $sql);
 ?>


 <?php while($r= mysqli_fetch_assoc($res)){ ?>
	  <div class="col-sm-6 col-md-3">
	    <div class="thumbnail">
	      <img src="<?php echo $r['image']; ?>" alt="<?php echo $r['title'] ?>">
	      <div class="caption">
	        <h3><?php echo $r['title'] ?></h3>
	        <p><?php echo $r['description'] ?></p>
	        <p><a href="addtocart.php?id=<?php echo $r['id']; ?>" class="btn btn-primary" role="button">Add to Cart</a></p>
	      </div>
	    </div>
	  </div>
<?php } ?>
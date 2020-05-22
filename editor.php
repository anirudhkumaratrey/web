<?php
include("common/connection.php");
$productid=$_GET['productid'];
$sql="SELECT * FROM product where id=".$productid;

$data=mysqli_query($con,$sql);


?>
		<?php
		 session_start();
		 $_SESSION['productid']=$productid;
		 ?>
<?php
include("common/header_resources.html");
	include("common/header.php");
include("common/sidebar.php");
?>

<!--inner block start here-->
<div class="signup-page-main">
     <div class="signup-main">  	
    	 <div class="signup-head">
    	 <?php
	  
	  $row=mysqli_fetch_array($data);
	  ?>
				<h1>Edit Product Info</h1>
			</div>
			<div class="signup-block">
				<form action="update.php" method="post" enctype="multipart/form-data">
				<img src="<?php echo $row['image'];?>" height="150" width="150" class="thumbnail"/>
					<input type="text" name="name" placeholder="<?php echo $row['name'];?>" required="">
					<input type="text" name="category" placeholder="<?php echo $row['category'];?>" required="">
					<input type="text" name="price" placeholder="<?php echo $row['price'];?>" required="">
					
					<input type="text" name="qty" class="lock" placeholder="<?php echo $row['qty'];?>">
					
					<input type="text" name="disc" class="lock" placeholder="<?php echo $row['disc'];?>">
					
					<div class="forgot-top-grids">
						<div class="forgot-grid">
							
						</div>
						
						<div class="clearfix"> </div>
					</div>
					<input type="submit" name="submit" value="Confirm">												
				</form>
				</div>
		
				
    </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>	
<!--COPY rights end here-->
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>



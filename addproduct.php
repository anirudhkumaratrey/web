<?php
include("common/header_resources.html");
	include("common/header.php");
include("common/sidebar.php");
?>

<!--inner block start here-->
<div class="signup-page-main">
     <div class="signup-main">  	
    	 <div class="signup-head">
				<h1>Add Product</h1>
			</div>
			<div class="signup-block">
				<form action="product_saver.php" method="post" enctype="multipart/form-data">
					<input type="text" name="name" placeholder="Name" required="">
					<input type="text" name="category" placeholder="category" required="">
					<input type="text" name="price" placeholder="price" required="">
					
					<input type="text" name="qty" class="lock" placeholder="Quantity">
					<input type="text" name="disc" placeholder="Discription" required="">
					<input type="file" name="image" placeholder="image" required="">
					<div class="forgot-top-grids">
						<div class="forgot-grid">
							<ul>
								<li>
									<input type="checkbox" id="brand1" value="">
									<label for="brand1"><span></span>I agree to the terms</label>
								</li>
							</ul>
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



                      
						

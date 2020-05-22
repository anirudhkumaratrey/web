<?php
include("common/connection.php");
$id=$_GET['id'];
$sql="SELECT * FROM login_form where id=".$id;

$data=mysqli_query($con,$sql);


?>
		<?php
		 session_start();
		 $_SESSION['id']=$id;
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
				<h1>Edit User Info</h1>
			</div>
			<div class="signup-block">
				<form action="update_user.php" method="post" enctype="multipart/form-data">
				<img src="<?php echo $row['image'];?>" height="50" width="50" class="thumbnail"/>
					<input type="text" name="name" placeholder="<?php echo $row['name'];?>" required="">
					<input type="text" name="email" placeholder="<?php echo $row['email'];?>" required="">
					<input type="text" name="dob" placeholder="<?php echo $row['dob'];?>" required="">
					
					<input type="text" name="password" class="lock" placeholder="<?php echo $row['password'];?>">			
					
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



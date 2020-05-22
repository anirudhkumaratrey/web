
	  <?php
//include("common/header_resources.html");
//	include("common/header.php");
//include("common/sidebar.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Shoppy an Admin Panel Category Flat Bootstrap Responsive Website Template | Signup :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet">
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--//charts-->
</head>
<body>	<br>
	<br>	<br>	<br>	<br>	<br>	<br>	<br>
<!--inner block start here-->
<div class="login-page-main">
     <div class="login-main">  	
    	 <div class="login-head">
				<h1>Login</h1>
			</div>
			<div class="login-block">
				<form action= "backlogin.php" method="post">
					
					<input type="text" name="email" placeholder="email" required="">
							
					<input type="password" name="password" class="lock" placeholder="password">
							<div style="background-color:;margin-bottom:5px;">
			<?php 
	if(isset($_GET['error']))
	{
		$error=$_GET['error'];
		echo "<h3 align='center'><font color='red'>$error</font></h3>";
	  }	 
	  ?>
		 </div>
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
					
					<input type="submit" name="Sign In" value="Sign In">														
				</form>
				
			</div>

    </div>
    
</div>
<!--inner block end here-->
<?php
	include("common/copyright.php");
	
	?>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						

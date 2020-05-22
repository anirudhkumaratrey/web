<?php
include("common/header_resources.html");
	include("common/header.php");
include("common/sidebar.php");
?>
<?php
	if(isset($_GET['search']))
	{
$search=$_GET['searches'];
		$search=preg_replace("#[^0-9a-z]#i","",$search);

	}
else{
	$search="%";
}
?>
<?php
require('common/connection.php');

$sql="select * from product WHERE name Like'%$search%' OR category Like'%$search%'";

$rows=mysqli_query($con,$sql);

?>



  	  	
	
<!-- script-for sticky-nav -->
	
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
<!-- /script-for sticky-nav -->
<!--search-box-->
							
<!--inner block start here-->
<div class="inner-block">
    <div class="product-block">
    	<div class="pro-head">
    		<h2>Products</h2>
    	</div>
    		<div class="search-box" style="margin-left: 25%;">
									<form action="" method="get">
										<input type="text" placeholder="Search..." required="" name="searches">	
										<input type="submit" value="" name="search">					
									</form>
								</div><!--//end-search-box-->
    	<table>
    	<br>
	<br>
	<br>
    	<?php
	  
	  while($row=mysqli_fetch_array($rows)){
	  ?>
  	 
 
    	<div class="col-md-3 product-grid" style="float: left">
    		<div class="product-items">
	    		    <div class="project-eff">
						<div id="nivo-lightbox-demo"> <p> <a href="<?php echo $row['image'];?>"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo" ><span class="rollover1"> </span> </a></p></div>     
							<img class="img-responsive" src="<?php echo $row['image'];?>" alt="" height="117px" width="287px">
					</div>
	    		<div class="produ-cost">
	    			<h4 style="text-align: center"><?php echo $row['name'];?></h4>
	    			<h5 style="text-align: center"> <?php echo $row['price'];?></h5>
	    		<!---	<h5 style="align-content: center"><a href="editor.php?productid=<?php echo $row['id']; ?>" class="btn btn-warning"><span class="fa fa-edit"></span></a>
	<a href="back.php?productid=<?php echo $row['id']; ?>" class="btn btn-danger" ><span class="fa fa-close"></a>
	</h5>
	    		--->
	    		</div>
    		</div>
    	</div>
    	  	  	  	  	<?php
	  }
	  ?>
   	</table>
    	
      <div class="clearfix"> </div>
    </div>
</div>
<!--inner block end here-->
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
			<script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
				<script type="text/javascript">
				$(document).ready(function(){
				    $('#nivo-lightbox-demo a').nivoLightbox({ effect: 'fade' });
				});
				</script>

<?php
include("common/copyright.php");
?>
</div>
</div>


<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						

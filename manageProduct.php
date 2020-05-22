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
include("common/header_resources.html");
include("common/header.php");
require('common/connection.php');

$sql="select * from product WHERE name Like'%$search%' OR category Like'%$search%'";

$rows=mysqli_query($con,$sql);

?>

<!--inner block start here-->
<div class="inner-block">
<!--market updates updates-->
	
<!--main page chart start here-->
<div class="main-page-charts">
	<div class="search-box" style="margin-left: 25%; margin-bottom: 25px;">
									<form action="" method="get">
										<input type="text" placeholder="Search..." required="" name="searches">	
										<input type="submit" value="" name="search">					
									</form>
								</div>
 
 <div class="row">
 		<div class="col-md-12">
 			<button class="btn btn-block btn-success"> Product Table</button>
 		</div>
 </div>
  <table class="table table-hover table-striped">
  	<tr>
  		<th>
  			Sno.
  		</th>
  		<th>
  			Name
  		</th>
  		<th>
  			Price
  		</th>
  		<th>
  			Quantity
  		</th>
  		<th>
  			Image
  		</th>
  		<th>
  			Category
  		</th>
  		<th>
  			Description
  		</th>
  		<th>
  			Edit
  		</th>
  		<th>
  			Delete
  		</th>
  	</tr>

  	
  	<?php
	  
	  while($row=mysqli_fetch_array($rows)){
	  ?>
  	  <tr>
  	  	<td><?php echo $row['id'];?></td>
  	  	<td><?php echo $row['name'];?></td>
  	  	<td><?php echo $row['price'];?></td>
  	  	<td><?php echo $row['qty'];?></td>
  	  	<td><img src="<?php echo $row['image'];?>" height="50" width="50" class="thumbnail"/></td>
  	  	<td><?php echo $row['category'];?></td>
  	  	<td><?php echo $row['disc'];?></td>
<form method="get">
  	  	
		  <td><a href="editor.php?productid=<?php echo $row['id']; ?>" class="btn btn-warning"><span class="fa fa-edit"></span></a></td>
	<td><a href="back.php?productid=<?php echo $row['id']; ?>" class="btn btn-danger" ><span class="fa fa-close"></a></td>
	  </form>
  	  </tr>	
  	  	  		
 	  	  	  	  	<?php
	  }
	  ?>
	  	  	  	<?php
	  /*
		  if($_GET){
    if(isset($_GET['delete'])){
require('common/connection.php');
$sql="DELETE FROM product where id ='$row[id]'";
mysqli_query($con,$sql);
if(mysqli_query($con,$sql))
	{
		echo"saved successfully";
		
		
	}
	else
	{
		echo mysqli_error($con);
		
		
	}
	}
		  }
		  */
?>
	  	  	  	  	  	  
  	  	  	  	
  	  	  	  	  	  	
  </table> 
  

<?php

include("common/copyright.php");
include("common/sidebar.php");


?>
                 
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

$sql="select * from login_form WHERE name Like'%$search%'";

$rows=mysqli_query($con,$sql);
$i=0;

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
 			<button class="btn btn-block btn-success"> Users Info</button>
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
  			Email
  		</th>
  		<th>
  			Date Of Birth
  		</th>
  		<th>Profile Picture
  		</th>
  		<th>
  			Password
  		</th>
  	
  		<th>
  			Edit
  		</th>
  		<th>
  			Delete
  		</th>
  	</tr>

  	
  	<?php
	  
	  while($row=mysqli_fetch_array($rows)){$i++;
	  ?>
  	  <tr>
  	  	<td><?php echo $row['id'];?></td>
  	  	<td><?php echo $row['name'];?></td>
  	  	<td><?php echo $row['email'];?></td>
  	  	<td><?php echo $row['dob'];?></td>
  	  	<td><img src="<?php echo $row['profile_picture'];?>" height="50" width="50" class="thumbnail"/></td>
  	  	<td><?php echo $row['password'];?></td>
  	

  	  	
		  <td><a href="editor_user.php?id=<?php echo $row['id']; ?>" class="btn btn-warning"><span class="fa fa-edit"></span></a></td>
	<td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" ><span class="fa fa-close"></a></td>
	  
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
                 
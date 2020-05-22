<?php
include("common/connection.php");
$sql="DELETE FROM product where id=".$_GET['productid'];
if(mysqli_query($con,$sql))
	{
		header("Localtion:manageProduct.php");
	}
	else
	{
		echo mysqli_error($con);
	}
?>
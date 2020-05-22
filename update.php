<?php
session_start();
$productid=$_SESSION['productid'];

$name=$_POST['name'];
		$category=$_POST['category'];
		$price=$_POST['price'];
	$qty=$_POST['qty'];
	$disc=$_POST['disc'];
    $con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"web");
	$sql="UPDATE product SET name='$name', price='$price' , qty='$qty' , category='$category', disc='$disc' where
	id=".$productid;
	if(mysqli_query($con,$sql))
	{
		echo"saved successfully";
		header("location:manageProduct.php");
	}
	else
	{
		echo mysqli_error($con);
		
	}
	
?>
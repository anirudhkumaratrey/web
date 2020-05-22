<?php
session_start();
$id=$_SESSION['id'];

$name=$_POST['name'];
		$email=$_POST['email'];
		$dob=$_POST['dob'];
	$password=$_POST['password'];
	
    $con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"web");
	$sql="UPDATE login_form SET name='$name', email='$email' , password='$password' , dob='$dob',  where
	id=".$id;
	if(mysqli_query($con,$sql))
	{
		echo"saved successfully";
		header("location:manageUser.php");
	}
	else
	{
		echo mysqli_error($con);
		
	}
	
?>
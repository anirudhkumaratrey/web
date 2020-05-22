<?php
		$password=$_POST['password'];
$email=$_POST['email'];
		//$search=preg_replace("#[^0-9a-z]#i","",$search);

	
require('common/connection.php');
$sql="select password from admin WHERE email= '$email' and password='$password'";

$rows=mysqli_query($con,$sql);
		 if($row=mysqli_fetch_array($rows)){
		  header("Location:dashbord.php");
	  }
else{
	$error="incorrect username or password";
	header("Location:login.php?error=$error");
}
	
?>
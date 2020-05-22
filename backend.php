<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
	   $dob=$_POST['dob'];
	$img=$_FILES['image']['name'];
	$dst="./pp/".$img;
	
	move_uploaded_file($_FILES["image"]["tmp_name"],$dst);
	
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"web");
	$sql="insert into login_form(name,email,password,dob,profile_picture) values('$name','$email','$password','$dob','$dst')";
	if(mysqli_query($con,$sql))
	{
		echo"saved successfully";
		header("location:manageUsers.php");
	}
	else
	{
		echo mysqli_error($con);
		
	}
	?>
</body>
</html>
<?php
	$name=$_POST['name'];
		$category=$_POST['category'];
		$price=$_POST['price'];
	$qty=$_POST['qty'];
	$disc=$_POST['disc'];
	$img=$_FILES['image']['name'];
	$dst="./product/".$img;
	$dst1="product/".$img;
	move_uploaded_file($_FILES["image"]["tmp_name"],$dst);
	
	
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"web");
	$sql="insert into product(name,price,qty,image,category,disc) values('$name','$price','$qty','$dst1','$category','$disc')";
	if(mysqli_query($con,$sql))
	{
		echo"saved successfully";
		header("location:addproduct.php");
	}
	else
	{
		echo mysqli_error($con);
		
	}
	?>
</body>
</html>
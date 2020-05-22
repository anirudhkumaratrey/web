<?php
include("common/connection.php");
$sql="DELETE FROM login_form where id=".$_GET['id'];
if(mysqli_query($con,$sql))
	{
		header("Location: manageUsers.php");
	}
	else
	{
		echo mysqli_error($con);
	}
?>
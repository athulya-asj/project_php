<?php
require_once("connect.php");
$username=$_POST['username'];
$password=$_POST['password'];
if(isset($_POST['create']));
{
	  
	$sql="INSERT INTO facultys(username,password)
	VALUES('".$username."','".$password."')";
	if(!$result=$conn->query($sql))
	{
		die('there was an error running in the query['.$conn->error.']');
	}
    else
	{
			echo"thankyou";
	}
}
?>	
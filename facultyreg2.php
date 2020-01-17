<?php
require_once("connect.php");
$factid=$_POST['factid'];
$name=$_POST['name'];
$address=$_POST['address'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$qualification=$_POST['qualification'];
$mobile=$_POST['mobile'];
$assigned_batch=$_POST['assigned_batch'];
$username-$_POST['username'];
$password=$_POST['password'];
if(isset($_POST['submit']));
{
	  
	$sql="INSERT INTO faculty(factid,name,address,dob,gender,qualification,mobile,assigned_batch,username,password)
	VALUES('".$factid."','".$name."','".$address."','".$dob."','".$gender."','".$qualification."','".$mobile."','".$assigned_batch."','".$username."','".$password."')";
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
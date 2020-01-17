<?php
include_once ("connect.php");
$factid=$_POST['factid'];
$name=$_POST['name'];
$address=$_POST['address'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$qualification=$_POST['qualification'];
$mobile=$_POST['mobile'];
$assigned_batch=$_POST['assigned_batch'];
$username=$_POST['username'];
$password=$_POST['password'];
if (isset($_POST['submit']))
{
	$sql="UPDATE faculty SET address='".$address."',dob='".$dob."',gender='".$gender."',qualification='".$qualification."',mobile='".$mobile."',
	assigned_batch='".$assigned_batch."',username='".$username."',password='".$password."' where name='".$name."'";                                    
	if(!$result=$conn->query($sql))
	{
		die('there was an error running the query['.$conn->error.']');
	}
	else
	{
	 require_once "factpage.php";
	}
}
?>	

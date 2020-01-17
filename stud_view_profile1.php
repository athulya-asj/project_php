<?php
include_once ("connect.php");
$stdid=$_POST['stdid'];
$admno=$_POST['admno'];
$name=$_POST['name'];
$address=$_POST['address'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$mobile=$_POST['mobile'];
$admdate=$_POST['admdate'];
$guardian=$_POST['guardian'];
$batch=$_POST['batch'];
$username=$_POST['username'];
$password=$_POST['password'];
if (isset($_POST['submit']))
{
	$sql="UPDATE std_register SET  name='".$name."',address='".$address."',dob='".$dob."',gender='".$gender."',mobile='".$mobile."',
	guardian='".$guardian."',batch='".$batch."',username='".$username."',password='".$password."' where name='".$name."'";                                    
	if(!$result=$conn->query($sql))
	{
		die('there was an error running the query['.$conn->error.']');
	}
	else
	{
	 require_once "studentprof.php";
	}
}
?>	

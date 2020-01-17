<?php
require_once("connect.php");
$name=$_POST['name'];
$to_=$_POST['to_'];
$leavereason=$_POST['leavereason'];
$fromdate=$_POST['fromdate'];
$todate=$_POST['todate'];

if(isset($_POST['submit']));
{
	  
	$sql="INSERT INTO std_applyleave(name,to_,leavereason,fromdate,todate)
	VALUES('".$name."','".$to_."','".$leavereason."','".$fromdate."','".$todate."')";
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
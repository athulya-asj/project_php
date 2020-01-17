<?php
require_once("connect.php");
$stdid=$_POST['stdid'];
$name=$_POST['name'];
$assessment=$_POST['assessment'];
$submark1=$_POST['submark2'];
$submark2=$_POST['submark2'];
$submark3=$_POST['submark3'];
$percentage=$_POST['percentage'];

if(isset($_POST['submit']));
{
	  
	$sql="INSERT INTO std_mark(stdid,name,assessment,submark1,submark2,submark3,percentage)
	VALUES('".$stdid."','".$name."','".$assessment."','".$submark1."','".$submark2."','".$submark3."','".$percentage."')";
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
<?php

require_once("connect.php");
session_start();

if(isset($_POST['submit']));
{
	$username=$_POST['username'];
	$password=$_POST['password'];
if($username=="admin"&& $password=="12345")
{
	header('location:admin.php');
}
else
{
	$sql="SELECT username FROM admin WHERE username='".$username."'and password='".$password."'";
	$result=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)>0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
				echo "hello "."{$row['username']}"."  login successful.... welcome";
		}	
	}
	
    else
    {
		$sql="select * from faculty where username='".$username."' and password='".$password."'";
		$result= mysqli_query ($conn,$sql);
		
		if(mysqli_num_rows($result)>0)
		{
				while($row=mysqli_fetch_assoc($result))
				{
					session_start();
					$_SESSION['factid']=$row['factid'];
					header('location:factpage.php');
				}
		}
		else
		{
			$sql="select * from std_register where username='".$username."' and password='".$password."'";
			$result= mysqli_query ($conn,$sql);
			if(mysqli_num_rows($result)>0)
			{
					while($row=mysqli_fetch_assoc($result))
					{
						session_start();
					    $_SESSION['stdid']=$row['stdid'];
						header('location:studentprof.php');
					}
				}
				else
				{
					echo "Name or Password incorrect";
				}
			
			}
		}
		mysqli_close($conn);
}
}

?>	
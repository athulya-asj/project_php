<?php
	require_once("connection.php");
	session_start();
	if(isset($_POST['submit']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql="select username from admin where username='".$username."' and password='".$password."'";
		$result= mysqli_query ($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				header('location:adminhome.php');
			}
		}
		else
		{
			$sql="select username from faculty where Username='".$username."' and Password='".$password."'";
			$result= mysqli_query ($conn,$sql);
			if(mysqli_num_rows($result)>0)
			{
				while($row=mysqli_fetch_assoc($result))
				{
					header('location:facultyhome.php');
				}
			}
			else
			{
				$sql="select username from student where Username='".$username."' and Password='".$password."'";
				$result= mysqli_query ($conn,$sql);
				if(mysqli_num_rows($result)>0)
				{
					while($row=mysqli_fetch_assoc($result))
					{
						header('location:studenthome.php');
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
?>
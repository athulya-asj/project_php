<!DOCTYPE html>
<html>
<head>
<title>
</title>
<link rel="stylesheet" href="css/style3.css">
<style>
</style>

</head>
<body class="b1">
<div class="navbar">
<ul>
<li>Edit

<div class="submenu">
<ul>
<li><a href="password.php">Password</a></li>
<li><a href="mobile.php">Mobile</a></li>
<li><a href="email.php">Email</a></li>
</ul>
</div>
</li>
<li><a href="logout.php">Logout</a></li>
</ul>
</div>




<form>
				<?php
						require_once ("connect.php");
						session_start();
						$var=$_SESSION['stdid'];
						$sql="select * from std_mark";
						$result=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_assoc($result))
						{
					?>
			 <h1><?php  echo $row['name'];?></h1><br>
			
<table>

   
    <tr>
        <td>StudentId</td><td>:</td><td><?php echo $row['stdid'];?></td>
    </tr>
	
    <tr>
        <td>Name</td><td>:</td><td><?php echo $row['name'];?></td>
    </tr>
    <tr>
        <td>AssessmentNo</td><td>:</td><td><?php echo $row['assessment'];?></td>
    </tr>
    <tr>
        <td>Submark1</td><td>:</td><td><?php echo $row['submark1'];?></td>
    </tr>
	<tr>
        <td>Sub2mark</td><td>:</td><td><?php echo $row['submark2'];?></td>
    </tr>
	<tr>
        <td>Sub3mark</td><td>:</td><td><?php echo $row['submark3'];?></td>
    </tr>
	<tr>
        <td>Percentage</td><td>:</td><td><?php echo $row['percentage'];?></td>
    </tr>
    
</table>
<?php
								}
							?>
            

</form>
        </div>
	</div>
	</body>
</html>
		




</body>
</html>

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
						$var=$_SESSION['factid'];
						$sql="select * from faculty where factid=$var";
						$result=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_assoc($result))
						{
					?>
					
			    <h1><font color="white"><?php echo $row['name'];?></h1><br></font>

<div class="c">			
<table>



   
    <tr>
        <td>Faculty id </td><td>:</td><td><?php echo $row['factid'];?></td>
    </tr>
    <tr>
        <td>Name</td><td>:</td><td><?php echo $row['name'];?></td>
    </tr>
    <tr>
        <td>Address</td><td>:</td><td><?php echo $row['address'];?></td>
    </tr>
    <tr>
        <td>Dob</td><td>:</td><td><?php echo $row['dob'];?></td>
    </tr>
    <tr>
        <td>Gender</td><td>:</td><td><?php echo $row['gender'];?></td>
    </tr>
    <tr>
        <td>Qualification</td><td>:</td><td><?php echo $row['qualification'];?></td>
    <tr>
        <td>Mobile</td><td>:</td><td><?php echo $row['mobile'];?></td>
    </tr>
	<tr>
        <td>Assigned batch</td><td>:</td><td><?php echo $row['assigned_batch'];?></td>
    </tr>
	<tr>
        <td>Username</td><td>:</td><td><?php echo $row['username'];?></td>
    </tr>
    <tr>
        <td>Password</td><td>:</td><td><?php echo $row['password'];?></td>
    </tr>
</table>
</div>
<?php
								}
							?>
            
<br><br><br>
<a href="fac_editprofile.php"><font color="white"><b>Edit Profile</a></font></b>
</form>
        </div>
	</div>
	</body>
</html>
		
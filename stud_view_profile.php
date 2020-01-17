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
						$sql="select * from std_register where stdid=$var";
						$result=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_assoc($result))
						{
					?>
					
			    <h1><font color="white"><?php echo $row['name'];?></h1><br></font>

<div class="c">			
<table>


   
    <tr>
        <td>student id </td><td>:</td><td><?php echo $row['stdid'];?></td>
    </tr>
	<tr>
        <td>Admissionno </td><td>:</td><td><?php echo $row['admno'];?></td>
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
        <td>Mobile</td><td>:</td><td><?php echo $row['mobile'];?></td>
    </tr>
	<tr>
        <td>Admission date</td><td>:</td><td><?php echo $row['admdate'];?></td>
    </tr>
	<tr>
        <td>guardian</td><td>:</td><td><?php echo $row['guardian'];?></td>
    </tr>
	<tr>
        <td>batch</td><td>:</td><td><?php echo $row['batch'];?></td>
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
<a href="stud_editprofile.php"><font color="white"><b>Edit Profile</a></font></b>
</form>
        </div>
	</div>
	</body>
</html>
		
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
<li><a href="logout.php">Logout</li></a>
</ul>
</div>


	<form action="stud_view_profile1.php" method=POST>
			    <?php
						require_once ("connect.php");
						session_start();
						$var=$_SESSION['stdid'];
						$sql="select * from std_register where stdid=$var";
						$result=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_assoc($result))
						{
			        ?>
					
					
              <h1><font color="white">Edit Profile</h1><br>	</font>
<div class="c">				  
			  
<table>
     <tr>
        <td>Stid</td><td>:</td><td><input type="text" value=<?php echo $row['stdid'];?> name="stid"></td>
    </tr>
	<tr>
        <td>Admissionno</td><td>:</td><td><input type="text" value=<?php echo $row['admno'];?> name="admno"></td>
    </tr>

    <tr>
        <td>Name</td><td>:</td><td><input type="text" value=<?php echo $row['name'];?> name="name"></td>
    </tr>
    <tr>
        <td>Address</td><td>:</td><td><input type="text" value=<?php echo $row['address'];?> name="address"></td>
    </tr>
	<tr>
        <td>Dob</td><td>:</td><td><input type="text" value=<?php echo $row['dob'];?> name="dob"></td>
    </tr>
 
    <tr>
        <td>Gender</td><td>:</td><td><input type="text" value=<?php echo $row['gender'];?> name="gender"></td>
    </tr>
    
    <tr>
        <td>Mobile</td><td>:</td><td><input type="text" value=<?php echo $row['mobile'];?> name="mobile"></td>
    </tr>
	<tr>
        <td>Admindate</td><td>:</td><td><input type="text" value=<?php echo $row['admdate'];?> name="admdate"></td>
    </tr>
	<tr>
        <td>Guardian</td><td>:</td><td><input type="text" value=<?php echo $row['guardian'];?> name="guardian"></td>
    </tr>
    <tr>
        <td>Batch </td><td>:</td><td><input type="text" value=<?php echo $row['batch'];?> name="batch"></td>
    </tr>
	 <tr>
        <td>Username</td><td>:</td><td><input type="text" value=<?php echo $row['username'];?> name="username"></td>
    </tr>
    <tr>
        <td>Password</td><td>:</td><td><input type="text" value=<?php echo $row['password'];?> name="password"></td>
    </tr>
</table>
</div>

           <?php
								}
							?>
             
            
<br>
<input type="submit" value="Save" name="submit" class="btn">
</form>
        </div>
	</div>
	</body>
</html>
		
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="css/style4.css">
		<style>
			table,td,th{border: 2px solid black;border-collapse: collapse; padding:10px;background-color: grey;text-align: center;}
		</style>  
	</head>
	<body class="b">
		<div class="menubar">
		
						<ul>
							<li><a href="view_student.php">Personal details</a></li>
							
						</ul>

					</div>
	
		<div>
			<h1>STUDENT DETAILS</h1>
			<br><br>
			
			
			<table>
				<thead>
					<tr>
						<th>Stdid</th>
						<th>AdmNo</th>
						<th>Name</th>
						<th>Address</th>
						<th>DOB</th>
						<th>Gender</th>
						<th>Mobile</th>
						<th>AdmissionDate</th>
						<th>Guardian</th>
						<th>Batch</th>
						<th>UserName</th>
						<th>Password</th>
					</tr>

				</thead>
				<tbody>
					
					<?php
						require_once ("connect.php");
						$sql="select * from std_register";
						$result=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_assoc($result))
						{
					?>
					<tr>
						<td><?php echo $row['stdid'];?></td>
						<td><?php echo $row['admno'];?></td>
						<td><?php echo $row['name'];?></td>
						<td><?php echo $row['address'];?></td>
						<td><?php echo $row['dob'];?></td>
						<td><?php echo $row['gender'];?></td>
						<td><?php echo $row['mobile'];?></td>
						<td><?php echo $row['admdate'];?></td>	
						<td><?php echo $row['guardian'];?></td>
						<td><?php echo $row['batch'];?></td>
						<td><?php echo $row['username'];?></td>
						<td><?php echo $row['password'];?></td>
					</tr>
						<?php
							}
						?>

				</tbody>
			</table>

		</div>
	
	</div>
	</body>
</html>
		
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
							<li><a href="view_faculty.php">Personal details</a></li>
							
						</ul>

					</div>
	
		<div>
			<h1>FACULTY DETAILS</h1>
			<br><br>
			
			
			<table>
				<thead>
					<tr>
						<th>Factid</th>
						<th>Name</th>
						<th>Address</th>
						<th>DOB</th>
						<th>Gender</th>
						<th>Qualification</th>
						<th>Mobile</th>
						<th>Assigned Batch</th>
						<th>UserName</th>
						<th>Password</th>
					</tr>

				</thead>
				<tbody>
					
					<?php
						require_once ("connect.php");
						$sql="select * from faculty";
						$result=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_assoc($result))
						{
					?>
					<tr>
						<td><?php echo $row['factid'];?></td>
						<td><?php echo $row['name'];?></td>
						<td><?php echo $row['address'];?></td>
						<td><?php echo $row['dob'];?></td>
						<td><?php echo $row['gender'];?></td>
						<td><?php echo $row['qualification'];?></td>
						<td><?php echo $row['mobile'];?></td>	
						<td><?php echo $row['assigned_batch'];?></td>
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
		
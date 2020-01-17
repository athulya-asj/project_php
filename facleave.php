<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="css/style4.css">


<style>
</style>
</head>
<body class="b">
<div class="menubar">
<ul>
<li><a href="factapplyleave.php">Leave Apply</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</div>
<form action="facleave2.php" method="POST">

<div class="cont">

<h3>Name:</h3>
<input type="text" class="frm" name="name" placeholder="">
<h3>To Date:</h3>
<input type="date" class="frm" name="todate" placeholder="">
<h3>Leave Reason:<h3>
<input type="text" class="frm" name="leavereason" placeholder="">
<h3>From Date:</h3>
<input type="date" class="frm" name="fromdate" placeholder="">

<center><input type="submit" name="submit" class="frm-btn" value="Submit"></center>

</div>
</form>
</body>
</html>
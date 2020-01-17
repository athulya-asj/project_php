<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="css/style2.css">

<style>
</style>
</head>
<body class="b">
<div class="menubar">
<ul>

<li>Apply leave</li>
</ul>
</div>
<form action="studapplyleave2.php" method= 'POST'> 
<div class="cont">

<h3>Name:</h3>
<input type="text" class="frm" name="name" placeholder="">
<h3>TO:</h3>
<input type="text" class="frm" name="to_" placeholder="">
<h3>Leave reason:</h3>
<input type="text" class="frm" name="leavereason" placeholder="">
<h3>From date:<h3>
<input type="date" class="frm" name="fromdate" placeholder="">
<h3>To date:</h3>
<input type="date" class="frm" name="todate" placeholder=""><br>
<br><center><input type="submit" name="submit" class="frm-btn" value="Submit"></center>
</form>
</div>
</body>
</html>

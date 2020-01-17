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
<li><a href="studmark.php">Leave Apply</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</div>
<form action="stdmark2.php" method="POST">

<div class="cont">

<h3>Stdid:</h3>
<input type="text" class="frm" name="stdid" placeholder="">
<h3>Name:</h3>
<input type="text" class="frm" name="name" placeholder="">
<h3>Assessment No:<h3>
<input type="text" class="frm" name="assessment" placeholder="">
<h3>Sub1mark:</h3>
<input type="text" class="frm" name="submark1" placeholder="">
<h3>Sub2mark:</h3>
<input type="text" class="frm" name="submark2" placeholder="">
<h3>Sub3mark:</h3>
<input type="text" class="frm" name="submark3" placeholder="">
<h3>Percentage:</h3>
<input type="text" class="frm" name="percentage" placeholder="">

<center><input type="submit" name="submit" class="frm-btn" value="Submit"></center>

</div>
</form>
</body>
</html>
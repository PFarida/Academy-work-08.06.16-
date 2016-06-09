<?php 
session_start();
session_unset();

 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
 <style>
  input{
  	display: block;
  	padding:5px 15px;
  	margin: 10px;
  	margin-bottom: 0;
  }

 </style>
</head>
<body>
<form action="admin/check.php" method="post">
<input type="text" name="username" placeholder="Username">
<input type="password" name="password" placeholder="Password">
<input type="submit" name="Send">
</form>
 


</body>
</html>
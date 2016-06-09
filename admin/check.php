<?php 
 $username=$_POST["username"];
 $password=$_POST["password"];
  if (isset($username) and isset($password)) {
  	if(empty($username) or empty($password)){
  		echo "Melumatlari tam doldurmaginizi xahis edirik";
  	}

  	else{
  		if($username=="admin" and $password=="admin"){
  			echo "Welcome this our funny page))";
  			session_start();
  			$_SESSION["User"]="$username";
  			$_SESSION["Pass"]="$password";
  			header("Location:admin.php");
  		}
  		else {
  			echo " Login ve ya parol yanlisdir(((";
  		}
  	}

  }
   else{
  		echo "Teessuf ki,login ve ya parol teyin olunmayib" ;
  }

 ?>



 <?php 

session_start();  
if(isset($_SESSION["User"])){
	echo "welcome" .$_SESSION["User"];
	echo"<hr>";
	echo "<a href='../index.php'>Exit</a>";
}
else{
	echo "Bu sehifeye giris etmeyiniz qadagandir!!!!!!!!!!!";
}
?>


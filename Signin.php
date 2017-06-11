<?php

session_start();

?>

<?php
	$email=$_POST["email"];
	
	$password=$_POST["password"];
		
	$connection=mysqli_connect("localhost","root","","jeet");
		
$query = mysqli_query($connection,"SELECT * FROM id where Email = '$email' AND Id = '$password'") or die(mysql_error());

	$check_user = mysqli_num_rows($query);
	
	if($check_user>0){
		
		$_SESSION['fav']="JEET";
		$_SESSION['fav8']="JEET1";
		header("Location: hello.php");

		echo "nice";
		

}
else
{
	echo "Invalid Username or Password";
	
}

	
?>
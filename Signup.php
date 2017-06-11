<?php

session_start();


?>

<?php



if (empty($_POST["email"])) {
    $emailErr = "Email is required";
	header("Location: welcome.html?id=' ".$emailErr." ' ");
	
  } 
 if(empty($_POST["first_name"]))
 {
$emailErr = "FirstName is required";
	header("Location: welcome.html?id=' ".$emailErr." ' ");
 } 
 if(empty($_POST["password"]))
 {
$emailErr = "Password is required";
	header("Location: welcome.html?id=' ".$emailErr." ' ");
 } 
  else if(!empty($_POST["email"]) && !empty($_POST["first_name"]) && !empty($_POST["password"]))
  {
    

	
	$email = $_POST["email"];
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	  $emailErr = "Invalid email format"; 
	  header("Location: welcome.html?id=' ".$emailErr." ' ");
    }
	
  else
  {
	$email=$_POST["email"];
	$firstname=$_POST["first_name"];
	$password=$_POST["password"];
		
	$connection=mysqli_connect("localhost","root","","jeet");
		
	$sql = "INSERT INTO id(Name,Id,Email) VALUES('$firstname','$password','$email')";
	$q1="SELECT * FROM id WHERE Name = '$firstname' OR Email = '$email' ";
	$query = mysqli_query($connection,$q1);
	
		if (mysqli_num_rows($query) > 0) 
		{
         
            header('Location: welcome.html');
            
        }
		else
		{

	$_SESSION['fav']="JEET";
		$_SESSION['fav8']="JEET";
    if ($connection->query($sql) === TRUE) {
   			 
			 header("Location: hello.php");
		} 
	else {
    		echo "Error: " . $sql . "<br>" . $connection->error;
		}
  }
  }
  }
?>
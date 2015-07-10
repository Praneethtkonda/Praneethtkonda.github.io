<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
// define variables and set to empty values
$name = $email ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$Username ="root";
	$Password ="your_password";
	$Server = "localhost";
	$database ="your_database";
	$connect = mysqli_connect($Server, $Username, $Password,$database);
	
	if(!connect){
		die("Connection failed:" .mysqli_connect_error());
	}
	$name = $_POST['name'];
	$age = $_POST['age'];
	$mail= $_POST['mail'];
	$pwd = $_POST['pwd'];
	$sql="INSERT INTO customers(`name`,`age`,`mail`,`password`)
		VALUES ('$name','$age','$mail','$pwd')";
	if(mysqli_query($connect,$sql)){
		echo "Account successfully created";
		echo "<br>";
	}
	mysqli_close($connect);
}	
?>
	<a href="http://localhost/reg/Project1/login.html">Click this to login</a>"
</body>
</html>



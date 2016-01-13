<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
// define variables and set to empty values
$name = $email ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$Username="adminAhwR2PQ";	
        $Password="SZQijmUftmln";
        $Server = "127.5.212.130:3306";
	$database ="praneeth";
	$connect = mysqli_connect($Server, $Username, $Password,$database);
	
	if(!$connect){
		die("Connection failed:" .mysqli_connect_error());
	}
	$name = $_POST['name'];
	$age = $_POST['age'];
	if($age<18){
		echo "You must be above 18 years to register here";
		header('Refresh:4; url= http://praneeth-tkart.rhcloud.com/signup.php');
	}
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
	<a href="http://praneeth-tkart.rhcloud.com/login.html">Click this to login</a>"
</body>
</html>



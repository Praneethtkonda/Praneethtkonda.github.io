<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Entries</title>
</head>
<body>
	<?php
		if($_SERVER['REQUEST_METHOD'] == "POST"){
			$username="root";	
			$password="hello";
			$server = "localhost";
			$connect = mysql_connect($server,$username,$password);
			
			if(!connect){
				echo "Connection failed";
			}
			$db=mysql_select_db("kart",$connect);
			$mail=$_POST['mail'];
			$pwd=$_POST['pwd'];								
			$sqlQuery = "SELECT * FROM customers WHERE mail='$mail' AND password= '$pwd'";
			$sql = mysql_query( $sqlQuery, $connect );
			$rows=mysql_num_rows($sql);
			if($rows > 0){
				echo "Login succesful";
				$_SESSION['name']=$mail;
				header('Refresh:2 ;url=Sk.php');
			}
			else{
				echo "Login fail";
			
			header('Refresh:3 ;url=login.html');
			}
			mysql_close($connect);
			
		}
	?>
</body>
</html>

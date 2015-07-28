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
			$username="adminAhwR2PQ";	
			$password="SZQijmUftmln";
			$server = "127.5.212.130:3306";
			$connect = mysql_connect($server,$username,$password);
			
			if(!connect){
				echo "Connection failed";
			}
			$db=mysql_select_db("praneeth",$connect);
			$mail=$_POST['mail'];
			$pwd=$_POST['pwd'];								
			$sqlQuery = "SELECT * FROM customers WHERE mail='$mail' AND password= '$pwd'";
			$sql = mysql_query( $sqlQuery, $connect );
			$rows=mysql_num_rows($sql);
			if($rows > 0){
				echo "Login succesful";
				$_SESSION['name']=$mail;
				header('Refresh:2 ;url=http://praneeth-tkart.rhcloud.com/Sk.php');
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

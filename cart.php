<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Your cart</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<?php include 'heading.php';?>
<body background="Photos/bi.jpg">
		<?php
			$username="adminAhwR2PQ";
			$password="SZQijmUftmln";
			$servername="127.5.212.130:3306";
			$database="praneeth";
			$conn=mysql_connect($servername, $username, $password, $database);	
			if(!$conn){
					echo "Not connected";			
			}
			$jeffa= $_SESSION['name'];
			$sql="SELECT * FROM `praneeth`.billing WHERE User = '$jeffa'";
			$query=mysql_query($sql);
			echo "<h1 class='Header'>Your cart</h1>";
			echo"<div class='container'>";
			echo "<fieldset>";
			echo "<table>"; 
			echo "<tr><td><strong>Name</strong></td><td><strong>Quantity&nbsp&nbsp</strong></td><td><strong>Price&nbsp&nbsp&nbsp</strong></td><td><strong>Total&nbsp&nbsp</strong></td>";
	while($row = mysql_fetch_array($query)){   
		echo "<tr><td>" . $row['Name'] . "</td><td>" . $row['Quantity'] ."     ". "</td><td>" . $row['Price'] . "</td><td>" . $row['Total'] . "</td><td><a href='remcart.php'>Remove the item</a></td></tr>";  
	}
			echo "</table>";
			echo "</fieldset>";
			echo "</div>"; 	
			echo "<a href='http://praneeth-tkart.rhcloud.com/Sk.php'>Go to the Website</a>"
	
		?>
</body>
<style>
			.container{
						margin:auto;
						padding:30px;
						text-align:center;
						font-size: 14px;
						font-family: monospace;
						width:500px;
			}
			.Header{
						text-align: center;	
								
			}
</style>
<script>
			$(function () {
				$('.link').onclick(function () {
						$_SESSION['item']="hi";
				});
			});
</script>
</html>
